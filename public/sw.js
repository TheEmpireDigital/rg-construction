const CACHE_NAME = 'rg-plumbing-v1';
const urlsToCache = [
  '/',
  '/css/app.css',
  '/js/app.js',
  '/images/brand/placeholder-logo.svg',
  '/manifest.json',
  '/offline.html',
  '/robots.txt',
  '/sitemap.xml',
  '/privacy-policy'
];

// Cache strategies
const CACHE_STRATEGIES = {
  CACHE_FIRST: 'cache-first',
  NETWORK_FIRST: 'network-first',
  STALE_WHILE_REVALIDATE: 'stale-while-revalidate'
};

// Define which strategy to use for different types of requests
const STRATEGY_MAP = {
  // HTML pages - network first, then cache
  'text/html': CACHE_STRATEGIES.NETWORK_FIRST,
  // CSS, JS, images - cache first, then network
  'text/css': CACHE_STRATEGIES.CACHE_FIRST,
  'application/javascript': CACHE_STRATEGIES.CACHE_FIRST,
  'image/': CACHE_STRATEGIES.CACHE_FIRST,
  // API calls - network first, then cache
  'application/json': CACHE_STRATEGIES.NETWORK_FIRST,
  // Default strategy
  'default': CACHE_STRATEGIES.STALE_WHILE_REVALIDATE
};

// Helper function to determine the strategy based on request
function getStrategy(request) {
  const contentType = request.headers.get('accept');
  for (const [type, strategy] of Object.entries(STRATEGY_MAP)) {
    if (contentType && contentType.includes(type)) {
      return strategy;
    }
  }
  return STRATEGY_MAP.default;
}

// Cache-first strategy
async function cacheFirst(request) {
  const cache = await caches.open(CACHE_NAME);
  const cachedResponse = await cache.match(request);
  
  if (cachedResponse) {
    return cachedResponse;
  }
  
  try {
    const networkResponse = await fetch(request);
    if (networkResponse.ok) {
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  } catch (error) {
    // If both cache and network fail, return offline page for navigation requests
    if (request.mode === 'navigate') {
      return cache.match('/offline.html');
    }
    throw error;
  }
}

// Network-first strategy
async function networkFirst(request) {
  try {
    const networkResponse = await fetch(request);
    const cache = await caches.open(CACHE_NAME);
    cache.put(request, networkResponse.clone());
    return networkResponse;
  } catch (error) {
    const cachedResponse = await caches.match(request);
    if (cachedResponse) {
      return cachedResponse;
    }
    // If both network and cache fail, return offline page for navigation requests
    if (request.mode === 'navigate') {
      return caches.match('/offline.html');
    }
    throw error;
  }
}

// Stale-while-revalidate strategy
async function staleWhileRevalidate(request) {
  const cache = await caches.open(CACHE_NAME);
  const cachedResponse = await cache.match(request);
  
  // Start network request in parallel
  const networkPromise = fetch(request).then(networkResponse => {
    if (networkResponse.ok) {
      cache.put(request, networkResponse.clone());
    }
    return networkResponse;
  });
  
  // Return cached response immediately if available
  if (cachedResponse) {
    return cachedResponse;
  }
  
  // Otherwise wait for network
  try {
    return await networkPromise;
  } catch (error) {
    // If network fails and we have a cached response, return it
    if (cachedResponse) {
      return cachedResponse;
    }
    // If both fail, return offline page for navigation requests
    if (request.mode === 'navigate') {
      return cache.match('/offline.html');
    }
    throw error;
  }
}

// Install event - cache static assets
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Activate event - clean up old caches
self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Fetch event - handle requests with appropriate strategy
self.addEventListener('fetch', event => {
  // Skip cross-origin requests
  if (!event.request.url.startsWith(self.location.origin)) {
    return;
  }
  
  // Skip non-GET requests
  if (event.request.method !== 'GET') {
    return;
  }
  
  const strategy = getStrategy(event.request);
  
  let responsePromise;
  switch (strategy) {
    case CACHE_STRATEGIES.CACHE_FIRST:
      responsePromise = cacheFirst(event.request);
      break;
    case CACHE_STRATEGIES.NETWORK_FIRST:
      responsePromise = networkFirst(event.request);
      break;
    case CACHE_STRATEGIES.STALE_WHILE_REVALIDATE:
    default:
      responsePromise = staleWhileRevalidate(event.request);
      break;
  }
  
  event.respondWith(responsePromise);
}); 
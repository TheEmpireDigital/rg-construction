<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RG Plumbing & Home Improvements | Professional Plumbing Services Johannesburg</title>
    <meta name="description" content="RG Plumbing & Home Improvements offers professional plumbing, water management, construction, and emergency services in Johannesburg. 24/7 emergency service available.">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://images.unsplash.com">
    
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Cookie and Privacy Settings -->
    <meta name="referrer" content="strict-origin-when-cross-origin">
    
    <!-- Browser Compatibility -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/icons/icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/icons/icon-192x192.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/icons/favicon.ico') }}">
    
    <!-- Alpine.js -->
    <script defer src="{{ asset('js/alpinejs@3.14.9.min.js') }}"></script>
    <script src="{{ asset('js/cookie-consent.js') }}" defer></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="antialiased bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-blue-900 text-white shadow-lg z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/brand/logo.png') }}" alt="RG Plumbing & Home Improvements" class="h-10 w-auto">
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-blue-200">Home</a>
                    <div class="dropdown">
                        <a href="#" class="hover:text-blue-200">Services</a>
                        <div class="dropdown-content">
                            <a href="{{ route('service.plumbing') }}">Plumbing Services</a>
                            <a href="{{ route('service.water-solutions') }}">Water Solutions</a>
                            <a href="{{ route('service.construction') }}">Construction Services</a>
                            <a href="{{ route('service.emergency') }}">Emergency Services</a>
                            <a href="{{ route('service.maintenance') }}">Maintenance Services</a>
                            <a href="{{ route('service.specialized') }}">Specialized Solutions</a>
                        </div>
                    </div>
                    <a href="{{ route('gallery') }}" class="hover:text-blue-200">Gallery</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-200">Contact Us</a>
                    <a href="{{ route('privacy') }}" class="hover:text-blue-200">Privacy Policy</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div class="hidden mobile-menu md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 hover:text-blue-200">Home</a>
                <a href="{{ route('service.plumbing') }}" class="block py-2 hover:text-blue-200 pl-4">- Plumbing Services</a>
                <a href="{{ route('service.water-solutions') }}" class="block py-2 hover:text-blue-200 pl-4">- Water Solutions</a>
                <a href="{{ route('service.construction') }}" class="block py-2 hover:text-blue-200 pl-4">- Construction Services</a>
                <a href="{{ route('service.emergency') }}" class="block py-2 hover:text-blue-200 pl-4">- Emergency Services</a>
                <a href="{{ route('service.maintenance') }}" class="block py-2 hover:text-blue-200 pl-4">- Maintenance Services</a>
                <a href="{{ route('service.specialized') }}" class="block py-2 hover:text-blue-200 pl-4">- Specialized Solutions</a>
                <a href="{{ route('gallery') }}" class="block py-2 hover:text-blue-200">Gallery</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-blue-200">Contact Us</a>
                <a href="{{ route('privacy') }}" class="block py-2 hover:text-blue-200">Privacy Policy</a>
            </div>
        </div>
    </nav>

    <!-- Main Content with Padding for Fixed Header -->
    <div class="pt-16">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">RG Plumbing & Home Improvements</h3>
                    <p class="text-blue-200 mb-2">Your trusted partner for all plumbing and construction needs in Johannesburg & Ekurhuleni.</p>
                    <a href="{{ route('privacy') }}#call-out-fees" class="underline hover:text-orange-500">* Call-out Fees</a>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p class="text-blue-200">24/7 Emergency Service</p>
                    <p class="text-blue-200 flex items-center gap-2">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        +27 71 752 0270
                    </p>
                    <p class="text-blue-200 flex items-center gap-2">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +27 83 980 5130
                    </p>
                    <p class="text-blue-200 flex items-center gap-2">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        inquiry@rgplumbing.co.za
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Service Areas</h3>
                    <p class="text-blue-200">
                        • Johannesburg<br>
                        • Ekurhuleni<br>
                        • <em>Other areas by arrangement</em>
                    </p>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-blue-800 text-center text-blue-200">
                <p>&copy; {{ date('Y') }} RG Plumbing & Home Improvements. All rights reserved.</p>
                <p class="mt-2">Made with ❤️ by <a href="https://vakara.africa" class="hover:text-white transition-colors duration-200" target="_blank" rel="noopener noreferrer">The Empire Digital</a></p>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <x-cookie-consent />

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html> 
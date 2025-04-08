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
                    <p class="text-blue-200">Phone: +27 71 752 0270</p>
                    <p class="text-blue-200">Phone: +27 83 980 5130</p>
                    <p class="text-blue-200">Email: hello@rgplumbing.co.za</p>
                    <p class="text-blue-200">Email: inquiry@rgplumbing.co.za</p>
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
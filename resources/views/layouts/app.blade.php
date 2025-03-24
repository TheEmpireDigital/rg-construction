<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RG Plumbing & Home Improvements - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
                        <img src="{{ asset('images/brand/placeholder-logo.svg') }}" alt="RG Plumbing & Home Improvements" class="h-10 w-auto">
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
                    <p class="text-blue-200">Your trusted partner for all plumbing and construction needs in Johannesburg.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p class="text-blue-200">24/7 Emergency Service</p>
                    <p class="text-blue-200">Phone: +27 71 752 0270</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Service Areas</h3>
                    <p class="text-blue-200">All Areas Johannesburg<br>Out of Johannesburg (by arrangement)</p>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-blue-800 text-center text-blue-200">
                <p>&copy; {{ date('Y') }} RG Plumbing & Home Improvements. All rights reserved.</p>
                <p class="mt-2">Made with ❤️ by <a href="https://vakara.africa" class="hover:text-white transition-colors duration-200" target="_blank" rel="noopener noreferrer">The Empire Digital</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-button').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html> 
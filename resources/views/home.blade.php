@extends('layouts.app')

@section('title', 'RG Plumbing & Home Improvements - Professional Plumbing & Construction Services in Johannesburg')

@section('content')
    <!-- SEO Component with Schema -->
    @php
        $schema = \App\Helpers\SeoHelper::getLocalBusinessSchema();
    @endphp
    <x-seo 
        title="RG Plumbing & Home Improvements - Professional Plumbing & Construction Services in Johannesburg"
        description="Expert plumbing, water solutions, and construction services in Johannesburg. Available 24/7 for emergency services. Licensed professionals with years of experience."
        canonical="{{ url('/') }}"
        schema="{{ $schema }}"
    />

    <!-- Hero Section with Auto Scroll -->
    <div class="hero-slider">
        <!-- Slide 1 - Commercial & Industrial -->
        <div class="slide" data-slide="1">
            <img src="https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Commercial Plumbing" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">RG Plumbing & Home Improvements</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">Commercial & Industrial Plumbing Specialists</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Industrial Solutions -->
        <div class="slide" data-slide="2">
            <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Industrial Solutions" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">Industrial Solutions</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">Complete Industrial Plumbing & Infrastructure</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Water Solutions -->
        <div class="slide" data-slide="3">
            <img src="{{ asset('images/gallery/water.jpeg') }}" alt="Water Solutions" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">Commercial Water Solutions</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">JoJo Tanks and Industrial Water Systems</p>
                </div>
            </div>
        </div>

        <!-- Slide 4 - Construction -->
        <div class="slide" data-slide="4">
            <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Construction Services" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">Industrial Construction</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">Building, Steel Work & Infrastructure</p>
                </div>
            </div>
        </div>

        <!-- Slide 5 - Emergency Services -->
        <div class="slide" data-slide="5">
            <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Emergency Services" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">24/7 Commercial Emergency Services</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">Rapid Response for Business & Industry</p>
                </div>
            </div>
        </div>

        <!-- Slide 6 - Maintenance -->
        <div class="slide" data-slide="6">
            <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Maintenance Services" class="slide-image">
            <div class="slide-overlay"></div>
            <div class="container mx-auto px-4 h-full flex items-start pt-16 slide-content">
                <div class="max-w-3xl">
                    <h2 class="text-3xl md:text-4xl font-bold mb-3 text-white typing-animation">Industrial Maintenance</h2>
                    <p class="text-lg text-blue-200 mb-6 typing-animation" style="animation-delay: 0.5s">Preventive Care & System Optimization</p>
                </div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="absolute bottom-6 left-0 right-0 z-20 text-center">
            <a href="{{ route('contact') }}" class="bg-gradient-blue hover:bg-gradient-blue-dark text-white font-bold py-2 px-6 rounded-lg inline-block transition-all duration-300 shadow-lg hover:shadow-xl">
                Get a Quote *
            </a>
        </div>
    </div>

    <!-- Quote CTA Banner -->
    <div class="relative py-10 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 overflow-hidden">
        <!-- Heap graph pattern gradient with parallax -->
        <div class="absolute inset-0 opacity-20 parallax-bg" style="background-image: url('data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'0.1\' fill-rule=\'evenodd\'/%3E%3C/svg%3E');"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="relative flex flex-col items-center justify-center">
                    <!-- Main quote with animation -->
                    <h3 class="text-3xl md:text-4xl font-bold text-white leading-tight mb-3 animate-text">
                        "👷 No job is too big or small to be done! 🏗️"
                    </h3>
                    
                    <!-- Supporting text with fade-in animation -->
                    <p class="text-lg text-blue-200 italic animate-fade-in">
                        From emergency repairs to large-scale installations, we handle every challenge with expertise.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-gray-900">Your Complete Industrial & Commercial Service Provider</h2>
                <p class="text-lg text-gray-600 mb-8">
                    RG Plumbing & Home Improvements delivers comprehensive solutions for commercial and industrial clients across Johannesburg and the surrounding areas. From advanced plumbing systems and water management to construction and steel works, we handle everything from emergency repairs to large-scale installations. Our expertise covers drain cleaning, leak detection, geyser services, JoJo tanks, heat pumps, building works, and more - all backed by our 24/7 emergency response team.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                    <div class="p-6 bg-gradient-blue text-white rounded-lg shadow-lg hover-lift">
                        <div class="mb-4">
                            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">24/7 Service</h3>
                        <p class="text-blue-100">Emergency services available around the clock</p>
                    </div>
                    <div class="p-6 bg-gradient-blue text-white rounded-lg shadow-lg hover-lift">
                        <div class="mb-4">
                            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Guaranteed Quality</h3>
                        <p class="text-blue-100">Professional service with lasting results</p>
                    </div>
                    <div class="p-6 bg-gradient-blue text-white rounded-lg shadow-lg hover-lift">
                        <div class="mb-4">
                            <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Wide Coverage</h3>
                        <p class="text-blue-100">Serving all areas in Johannesburg & Ekurhuleni</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Preview -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Comprehensive Commercial & Industrial Solutions</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover-lift">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4">{{ $service['title'] }}</h3>
                        <ul class="text-gray-600 space-y-2">
                            @foreach($service['features'] as $feature)
                            <li>• {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a href="{{ route($service['route']) }}" class="mt-6 inline-block text-blue-600 hover:text-blue-800">Learn More →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center text-gray-900">Contact Us</h2>
                <div class="bg-gradient-blue text-white rounded-lg p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Service Areas:</h3>
                            <p class="text-blue-100 mb-2">
                                • Johannesburg<br>
                                • Ekurhuleni<br>
                                • Other areas by arrangement
                            </p>
                            <p class="text-blue-100 mt-6 pt-6 border-t border-blue-900">
                                <strong>Phone:</strong><br>
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                    </svg>
                                    +27 71 752 0270
                                </span><br>
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    +27 83 980 5130
                                </span><br>
                                <span class="flex items-center gap-2">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                    inquiry@rgplumbing.co.za
                                </span>
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-4">Business Hours</h3>
                            <p class="text-blue-100 mb-4">24/7 Emergency Service Available</p>
                            <p class="text-blue-100">
                                For non-emergency services and quotes, please call during business hours or leave a message.
                            </p>
                            <div class="mt-6 pt-6 border-t border-blue-700">
                                <p class="text-blue-100 text-sm">
                                    <strong>RG PLUMBING AND HOME IMPROVEMENT (PTY) LTD</strong><br>
                                    Registration Number: 2023/820460/07
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Parallax effect */
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transform: translateZ(0);
            will-change: transform;
        }
        
        /* Text animation */
        .animate-text {
            animation: textReveal 1.5s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Fade-in animation */
        .animate-fade-in {
            animation: fadeIn 1.5s ease-out 0.5s forwards;
            opacity: 0;
        }
        
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>

    <script>
        // Hero Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function activateSlide(index) {
                // Remove active class from all slides
                slides.forEach(slide => {
                    slide.classList.remove('active');
                    slide.querySelectorAll('.typing-animation').forEach(el => {
                        el.classList.remove('active');
                    });
                });

                // Add active class to current slide
                slides[index].classList.add('active');
                
                // Add typing animation with delay
                setTimeout(() => {
                    slides[index].querySelectorAll('.typing-animation').forEach(el => {
                        el.classList.add('active');
                    });
                }, 500);
            }

            // Show first slide
            activateSlide(0);

            // Auto scroll slides
            setInterval(() => {
                currentSlide = (currentSlide + 1) % slides.length;
                activateSlide(currentSlide);
            }, 5000); // Change slide every 5 seconds
        });

        // Add parallax effect on scroll
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                const parallaxBg = document.querySelector('.parallax-bg');
                if (parallaxBg) {
                    const scrollPosition = window.pageYOffset;
                    parallaxBg.style.transform = `translateY(${scrollPosition * 0.1}px)`;
                }
            });
        });
    </script>
@endsection 
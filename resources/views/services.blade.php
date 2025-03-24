@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <!-- Services Header -->
    <div class="bg-blue-900 text-white py-16">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-center">Our Services</h1>
            <p class="text-xl text-center mt-4 text-blue-200">Comprehensive plumbing and construction solutions for your needs</p>
        </div>
    </div>

    <!-- Services Categories -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <!-- Plumbing Services -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Plumbing Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Drain Cleaning</h3>
                        <p class="text-gray-600">Professional drain cleaning services to clear blockages and ensure proper water flow.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Leak Detection</h3>
                        <p class="text-gray-600">Advanced leak detection technology to identify and fix hidden leaks quickly.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Pipe Repairs</h3>
                        <p class="text-gray-600">Expert pipe repair and replacement services for all types of plumbing systems.</p>
                    </div>
                </div>
            </div>

            <!-- Water Solutions -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Water Solutions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Geyser Installation</h3>
                        <p class="text-gray-600">Professional installation and maintenance of all types of geysers.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Solar Geysers</h3>
                        <p class="text-gray-600">Eco-friendly solar geyser solutions for energy-efficient water heating.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">JoJo Tanks</h3>
                        <p class="text-gray-600">Supply and installation of JoJo tanks for water storage solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Construction Services -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8 text-gray-900">Construction Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Building & Painting</h3>
                        <p class="text-gray-600">Complete building services and professional painting for all structures.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Steel Work</h3>
                        <p class="text-gray-600">Custom steel fabrication for various construction needs.</p>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="text-blue-600 mb-4">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Carports & Gates</h3>
                        <p class="text-gray-600">Design and installation of carports and security gates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-blue-900 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Need Our Services?</h2>
            <p class="text-xl mb-8">We're available 24/7 for all your plumbing and construction needs</p>
            <a href="#contact" class="bg-white text-blue-900 font-bold py-3 px-8 rounded-lg inline-block hover:bg-blue-100 transition duration-300">
                Contact Us Now
            </a>
        </div>
    </div>
@endsection 
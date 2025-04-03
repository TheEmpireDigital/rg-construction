@extends('layouts.app')

@section('title', 'Contact RG Plumbing & Home Improvements - Get in Touch')

@section('content')
    <!-- SEO Component with Schema -->
    @php
        $schema = \App\Helpers\SeoHelper::getContactPointSchema();
    @endphp
    <x-seo 
        title="Contact RG Plumbing & Home Improvements - Get in Touch"
        description="Contact RG Plumbing & Home Improvements for professional plumbing and construction services in Johannesburg. Available 24/7 for emergency services. Call us today!"
        canonical="{{ url('/contact') }}"
        schema="{{ $schema }}"
    />

    <!-- Contact Banner -->
    <div class="relative h-64">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80" alt="Contact Us" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-blue opacity-80"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Contact Us</h1>
                <p class="text-xl text-blue-200">Get in touch for professional service</p>
            </div>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-8" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Contact Form -->
                <div class="bg-white rounded-lg shadow-xl p-8">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">Service Inquiry</h2>
                        <p class="text-gray-600">Please fill out the form below to request our services. We offer 24/7 emergency services and will respond to your inquiry as soon as possible.</p>
                    </div>

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Two Column Layout for Small Inputs -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required autocomplete="name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4 text-base hover:bg-white focus:bg-white transition-colors duration-200">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4 text-base hover:bg-white focus:bg-white transition-colors duration-200">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required autocomplete="tel"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4 text-base hover:bg-white focus:bg-white transition-colors duration-200">
                            </div>

                            <!-- Service Type -->
                            <div>
                                <label for="service_type" class="block text-sm font-medium text-gray-700 mb-2">Service Required *</label>
                                <select name="service_type" id="service_type" required
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4 text-base hover:bg-white focus:bg-white transition-colors duration-200">
                                    <option value="">Select a Service</option>
                                    <optgroup label="Plumbing Services">
                                        <option value="drain_cleaning">Drain Cleaning</option>
                                        <option value="pipe_leaks">Pipe Leak Repairs</option>
                                        <option value="leak_detection">Leak Detection</option>
                                        <option value="bathroom">Bathroom Installation</option>
                                        <option value="sewer_lines">Sewer Line Services</option>
                                    </optgroup>
                                    <optgroup label="Water Solutions">
                                        <option value="jojo_tanks">JoJo Tank Installation</option>
                                        <option value="heat_pumps">Heat Pump Installation</option>
                                        <option value="borehole">Borehole Installation</option>
                                        <option value="solar_geysers">Solar Geyser Installation</option>
                                        <option value="septic_tanks">Septic Tank Services</option>
                                    </optgroup>
                                    <optgroup label="Construction & Steel Works">
                                        <option value="building">Building & Renovations</option>
                                        <option value="painting">Professional Painting</option>
                                        <option value="paving">Paving Solutions</option>
                                        <option value="roofing">Roof Repairs & Installation</option>
                                        <option value="steel_works">Steel Work Construction</option>
                                        <option value="carports">Carports & Gates</option>
                                    </optgroup>
                                    <option value="other">Other (Specify in message)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message - Full Width -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea name="message" id="message" rows="4" required
                                class="mt-1 block w-full rounded-md border border-gray-300 bg-gray-50 shadow-sm focus:border-blue-500 focus:ring-blue-500 py-3 px-4 text-base hover:bg-white focus:bg-white transition-colors duration-200">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full bg-gradient-blue hover:bg-gradient-blue-dark text-white font-bold py-4 px-8 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl text-lg">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="bg-gradient-blue text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Phone</h3>
                        <p class="text-gray-600">24/7 Available</p>
                        <a href="tel:+27717520270" class="text-blue-600 hover:text-blue-800">+27 71 752 0270</a>
                        <br>
                        <a href="tel:+27839805130" class="text-blue-600 hover:text-blue-800">+27 83 980 5130</a>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-blue text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Email</h3>
                        <p class="text-gray-600">Send us an email</p>
                        <a href="mailto:hello@rgplumbing.co.za" class="text-blue-600 hover:text-blue-800">hello@rgplumbing.co.za</a>
                        <a href="mailto:inquiry@rgplumbing.co.za" class="text-blue-600 hover:text-blue-800">inquiry@rgplumbing.co.za</a>

                    </div>

                    <div class="text-left">
                        <div class="bg-gradient-blue text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Location</h3>
                        <p class="text-gray-600 mb-2">Service Areas:</p>
                        <p class="text-gray-600">
                            • Johannesburg<br>
                            • Ekurhuleni<br>
                            • Other areas by arrangement
                        </p>
                    </div>
                </div>

                <!-- Company Registration Info -->
                <div class="mt-12 text-center">
                    <div class="inline-block border-t border-gray-200 pt-6">
                        <p class="text-gray-600 text-sm">
                            <strong>RG PLUMBING AND HOME IMPROVEMENT (PTY) LTD</strong><br>
                            Registration Number: 2023/820460/07
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
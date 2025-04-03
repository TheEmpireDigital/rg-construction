@extends('layouts.app')

@section('title', $service['title'] . ' - RG Plumbing & Home Improvements')

@section('content')
    <!-- SEO Component with Schema -->
    @php
        $schema = \App\Helpers\SeoHelper::getServiceSchema(
            $service['title'],
            $service['description'],
            $service['image'] ?? asset('images/services/placeholder.jpg')
        );
    @endphp
    <x-seo 
        title="{{ $service['title'] }} - RG Plumbing & Home Improvements"
        description="{{ $service['description'] }}"
        canonical="{{ url('/services/' . $service['slug']) }}"
        schema="{{ $schema }}"
    />

    <!-- Service Banner -->
    <div class="relative h-96">
        <img src="{{ $service['banner_image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-blue opacity-80"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $service['title'] }}</h1>
                <p class="text-xl text-blue-200">{{ $service['subtitle'] }}</p>
            </div>
        </div>
    </div>

    <!-- Service Content -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Service Description -->
                <div class="prose prose-lg mx-auto mb-12">
                    {!! $service['description'] !!}
                </div>

                <!-- Service Features -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    @foreach($service['features'] as $feature)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="text-blue-600 mb-4">
                            {!! $feature['icon'] !!}
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600">{{ $feature['description'] }}</p>
                    </div>
                    @endforeach
                </div>

                <!-- Our Services -->
                <div class="bg-gradient-blue text-white rounded-lg p-8 mb-12">
                    <h2 class="text-3xl font-bold mb-6">Our Services</h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($service['services_list'] as $service_item)
                        <li class="flex items-start space-x-3">
                            <svg class="w-6 h-6 text-blue-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>{{ $service_item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Call to Action -->
                <div class="text-center">
                    <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
                    <p class="text-gray-600 mb-8">Contact us now for a free consultation and quote</p>
                    <a href="{{ route('contact') }}" class="bg-gradient-blue hover:bg-gradient-blue-dark text-white font-bold py-3 px-8 rounded-lg inline-block transition-all duration-300 shadow-lg hover:shadow-xl">
                        Get a Free Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection 
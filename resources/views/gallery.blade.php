@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container mx-auto px-4 py-8" x-data="imageViewer()">
    <h1 class="text-3xl md:text-4xl font-bold text-center mb-12 text-blue-900">Our Work Gallery</h1>

    <!-- Image Viewer Modal -->
    <div x-show="isOpen" x-cloak
         class="fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center"
         @click.self="closeViewer()"
         @keydown.escape.window="closeViewer()"
         @keydown.arrow-left.window="previousImage()"
         @keydown.arrow-right.window="nextImage()">
        <div class="relative max-w-7xl mx-auto p-4">
            <!-- Close button -->
            <button @click="closeViewer()" class="absolute top-0 right-0 m-4 text-white hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Previous button -->
            <button @click="previousImage()" 
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-r hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Image -->
            <template x-if="currentImage">
                <img :src="currentImage" alt="Gallery image" class="max-h-[80vh] mx-auto">
            </template>

            <!-- Next button -->
            <button @click="nextImage()" 
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-l hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Caption -->
            <div class="text-white text-center mt-4">
                <template x-if="currentCaption">
                    <p x-text="currentCaption" class="text-lg"></p>
                </template>
            </div>
        </div>
    </div>

    <!-- Plumbing Services Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Plumbing Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.plumbing" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('plumbing', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Water Solutions Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Water Solutions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.water" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('water', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Construction Services Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Construction & Improvements</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.construction" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('construction', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Emergency Services Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Emergency Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.emergency" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('emergency', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Maintenance Services Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Maintenance Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.maintenance" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('maintenance', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>

    <!-- Specialized Solutions Gallery -->
    <div class="mb-12">
        <h2 class="text-2xl font-bold mb-6 text-blue-800">Specialized Solutions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <template x-for="(image, index) in categories.specialized" :key="index">
                <div class="bg-white rounded-lg shadow-md overflow-hidden cursor-pointer transform transition hover:scale-105"
                     @click="openViewer('specialized', index)">
                    <img :src="image.src" :alt="image.caption" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <p class="text-gray-700" x-text="image.caption"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
function imageViewer() {
    return {
        isOpen: false,
        currentCategory: '',
        currentIndex: 0,
        categories: {
            plumbing: [
                { src: '{{ asset("images/gallery/plumbing/1.jpg") }}', caption: 'Drainage installation' },
                { src: '{{ asset("images/gallery/plumbing/2.jpg") }}', caption: 'Drainage Leak detection and repair' },
                { src: '{{ asset("images/gallery/plumbing/3.jpg") }}', caption: 'Drainage Installation' },
                { src: '{{ asset("images/gallery/plumbing/2.jpg") }}', caption: 'Drainage repair' }
            ],
            water: [
                { src: '{{ asset("images/gallery/water/pic1.png") }}', caption: 'Water tank installation' },
                { src: '{{ asset("images/gallery/water/pic1.png") }}', caption: 'Water tank installation' },
                { src: '{{ asset("images/gallery/water/pic1.png") }}', caption: 'Water tank installation' },
                { src: '{{ asset("images/gallery/water/pic1.png") }}', caption: 'Water tank installation' },

            ],
            construction: [
                { src: '{{ asset("images/gallery/construction/1.jpg") }}', caption: 'Renovation maintenance' },
                { src: '{{ asset("images/gallery/construction/2.jpg") }}', caption: 'Painting and Decorating' },
                { src: '{{ asset("images/gallery/construction/3.jpg") }}', caption: 'Industrial Building' },
                { src: '{{ asset("images/gallery/maintenance/3.jpg") }}', caption: 'Residential Building' }
            ],
            emergency: [
                { src: '{{ asset("images/gallery/emergency/1.jpeg") }}', caption: 'Gyeser Roof leaks' },
                { src: '{{ asset("images/gallery/emergency/2.jpg") }}', caption: 'Geyser Installation' },
                { src: '{{ asset("images/gallery/emergency/3.jpg") }}', caption: 'Sink installation' },
                { src: '{{ asset("images/gallery/emergency/4.jpg") }}', caption: 'Geyser Repairs' }
            ],
            maintenance: [
                { src: '{{ asset("images/gallery/maintenance/1.jpg") }}', caption: 'Bathroom maintenance' },
                { src: '{{ asset("images/gallery/maintenance/2.jpg") }}', caption: 'Commercial Property maintenance' },
                { src: '{{ asset("images/gallery/maintenance/3.jpg") }}', caption: 'Residential Property maintenance' },
                { src: '{{ asset("images/gallery/maintenance/4.jpg") }}', caption: 'Water pipe maintenance' }
            ],
            specialized: [
                { src: '{{ asset("images/gallery/emergency/1.jpeg") }}', caption: 'Gyeser Roof leaks' },
                { src: '{{ asset("images/gallery/emergency/2.jpg") }}', caption: 'Geyser Installation' },
                { src: '{{ asset("images/gallery/emergency/3.jpg") }}', caption: 'Sink installation' },
                { src: '{{ asset("images/gallery/emergency/4.jpg") }}', caption: 'Geyser Repairs' }
            ]
        },
        get currentImage() {
            if (!this.currentCategory || !this.categories[this.currentCategory]) return null;
            return this.categories[this.currentCategory][this.currentIndex]?.src;
        },
        get currentCaption() {
            if (!this.currentCategory || !this.categories[this.currentCategory]) return null;
            return this.categories[this.currentCategory][this.currentIndex]?.caption;
        },
        openViewer(category, index) {
            if (!this.categories[category]) return;
            this.currentCategory = category;
            this.currentIndex = index;
            this.isOpen = true;
        },
        closeViewer() {
            this.isOpen = false;
        },
        nextImage() {
            if (!this.currentCategory) return;
            const categoryImages = this.categories[this.currentCategory];
            this.currentIndex = (this.currentIndex + 1) % categoryImages.length;
        },
        previousImage() {
            if (!this.currentCategory) return;
            const categoryImages = this.categories[this.currentCategory];
            this.currentIndex = (this.currentIndex - 1 + categoryImages.length) % categoryImages.length;
        }
    }
}
</script>
@endsection 
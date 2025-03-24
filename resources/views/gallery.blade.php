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
                { src: 'https://placehold.co/800x600/0066cc/white?text=Plumbing+1', caption: 'Professional pipe installation' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Plumbing+2', caption: 'Leak detection and repair' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Plumbing+3', caption: 'Bathroom plumbing services' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Plumbing+4', caption: 'Kitchen plumbing solutions' }
            ],
            water: [
                { src: 'https://placehold.co/800x600/0066cc/white?text=Water+1', caption: 'Water tank installation' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Water+2', caption: 'Water storage solutions' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Water+3', caption: 'Water treatment systems' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Water+4', caption: 'Water pump installation' }
            ],
            construction: [
                { src: 'https://placehold.co/800x600/0066cc/white?text=Construction+1', caption: 'Major renovation projects' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Construction+2', caption: 'Home improvements' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Construction+3', caption: 'Building extensions' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Construction+4', caption: 'Interior remodeling' }
            ],
            emergency: [
                { src: 'https://placehold.co/800x600/0066cc/white?text=Emergency+1', caption: '24/7 emergency response' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Emergency+2', caption: 'Burst pipe repairs' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Emergency+3', caption: 'Emergency leak fixes' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Emergency+4', caption: 'Rapid response team' }
            ],
            maintenance: [
                { src: 'https://placehold.co/800x600/0066cc/white?text=Maintenance+1', caption: 'Regular maintenance checks' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Maintenance+2', caption: 'Preventive maintenance' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Maintenance+3', caption: 'System inspections' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Maintenance+4', caption: 'Maintenance contracts' }
            ],
            specialized: [
                { src: 'https://placehold.co/800x600/0066cc/white?text=Specialized+1', caption: 'Custom plumbing solutions' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Specialized+2', caption: 'Specialized installations' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Specialized+3', caption: 'Complex system design' },
                { src: 'https://placehold.co/800x600/0066cc/white?text=Specialized+4', caption: 'Industrial plumbing' }
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
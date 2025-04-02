<div x-data="{ show: !localStorage.getItem('cookieConsent') }" 
     x-show="show" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform translate-y-2"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform translate-y-2"
     class="fixed bottom-0 left-0 right-0 bg-white text-gray-800 p-4 z-50 shadow-lg border-t border-gray-200"
     style="display: none;">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <div class="mb-4 md:mb-0 md:mr-4">
            <p class="text-sm">
                We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. 
                By clicking "Accept", you consent to our use of cookies. 
                <a href="{{ route('privacy') }}" class="text-blue-600 hover:text-blue-800 underline">Learn more</a>
            </p>
        </div>
        <div class="flex space-x-4">
            <button @click="acceptCookies(); show = false;" 
                    class="bg-blue-600 text-white px-4 py-2 rounded font-medium hover:bg-blue-700 transition-colors">
                Accept
            </button>
            <button @click="declineCookies(); show = false;" 
                    class="border border-gray-300 text-gray-700 px-4 py-2 rounded font-medium hover:bg-gray-100 transition-colors">
                Decline
            </button>
        </div>
    </div>
</div>

<script>
    function acceptCookies() {
        localStorage.setItem('cookieConsent', 'true');
        if (window.cookieConsentManager) {
            window.cookieConsentManager.enableCookies();
        }
    }
    
    function declineCookies() {
        localStorage.setItem('cookieConsent', 'false');
        if (window.cookieConsentManager) {
            window.cookieConsentManager.disableCookies();
        }
    }
</script> 
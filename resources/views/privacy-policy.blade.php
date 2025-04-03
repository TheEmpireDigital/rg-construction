@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-blue-900 mb-8">Privacy Policy</h1>
        
        <div class="prose prose-lg max-w-none">
            <p class="mb-6">Last updated: {{ date('F d, Y') }}</p>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Introduction</h2>
            <p>RG Plumbing & Home Improvements ("we", "our", or "us") respects your privacy and is committed to protecting your personal data. This privacy policy will inform you about how we look after your personal data when you visit our website and tell you about your privacy rights and how the law protects you.</p>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Information We Collect</h2>
            <p>We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:</p>
            <ul class="list-disc pl-6 mb-6">
                <li><strong>Identity Data</strong> includes first name, last name, username or similar identifier.</li>
                <li><strong>Contact Data</strong> includes email address, telephone numbers, and postal address.</li>
                <li><strong>Technical Data</strong> includes internet protocol (IP) address, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform, and other technology on the devices you use to access this website.</li>
                <li><strong>Usage Data</strong> includes information about how you use our website and services.</li>
            </ul>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">How We Use Your Information</h2>
            <p>We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
            <ul class="list-disc pl-6 mb-6">
                <li>To provide and maintain our service</li>
                <li>To notify you about changes to our service</li>
                <li>To provide customer support</li>
                <li>To gather analysis or valuable information so that we can improve our service</li>
                <li>To monitor the usage of our service</li>
                <li>To detect, prevent and address technical issues</li>
            </ul>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Cookies</h2>
            <p>We use cookies and similar tracking technologies to track the activity on our website and hold certain information. Cookies are files with a small amount of data which may include an anonymous unique identifier.</p>
            <p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our website.</p>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Data Security</h2>
            <p>We have implemented appropriate security measures to prevent your personal data from being accidentally lost, used, or accessed in an unauthorized way, altered, or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors, and other third parties who have a business need to know.</p>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Your Legal Rights</h2>
            <p>Under certain circumstances, you have rights under data protection laws in relation to your personal data, including the right to:</p>
            <ul class="list-disc pl-6 mb-6">
                <li>Request access to your personal data</li>
                <li>Request correction of your personal data</li>
                <li>Request erasure of your personal data</li>
                <li>Object to processing of your personal data</li>
                <li>Request restriction of processing your personal data</li>
                <li>Request transfer of your personal data</li>
                <li>Right to withdraw consent</li>
            </ul>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Call-Out Fees</h2>
            <p>Our call-out fee policy is structured based on the distance to your location:</p>
            <ul class="list-disc pl-6 mb-6">
                <li><strong>0-7 kilometers:</strong> No call-out fee applies</li>
                <li><strong>Over 7 kilometers:</strong> Call-out fees start from R350, with the final amount depending on the distance to your location</li>
            </ul>
            <p>Please note:</p>
            <ul class="list-disc pl-6 mb-6">
                <li>Distance is calculated from our base of operations</li>
                <li>The exact call-out fee will be communicated before service confirmation</li>
                <li>Call-out fees are separate from the actual service charges</li>
                <li>Emergency call-outs may have different rates depending on the urgency of the service and the time of day</li>
            </ul>
            
            <h2 class="text-2xl font-semibold text-blue-800 mt-8 mb-4">Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us:</p>
            <ul class="list-none pl-0 mb-6">
                <li>By email: hello@rgplumbing.co.za</li>
                <li>By email: inquiry@rgplumbing.co.za</li>
                <li>By phone: +27 71 752 0270</li>
                <li>By phone: +27 83 980 5130</li>
            </ul>
        </div>
    </div>
</div>
@endsection 
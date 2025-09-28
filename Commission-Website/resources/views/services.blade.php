@extends('layouts.app')

@section('title', 'Our Services - WebCraft')
@section('description', 'Comprehensive web development services including custom websites, e-commerce solutions, mobile apps, and digital transformation.')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-black bg-grid">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black opacity-90"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-black mb-8">
            <span class="gradient-text">Our Services</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto">
            Comprehensive digital solutions to transform your business and drive growth.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Web Development -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300">
                <div class="w-16 h-16 bg-white/10 rounded-xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-white mb-6">Web Development</h2>
                <p class="text-gray-400 mb-8 text-lg">
                    Custom websites and web applications built with cutting-edge technologies and modern frameworks.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Frontend</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• React & Vue.js</li>
                            <li>• TypeScript</li>
                            <li>• Tailwind CSS</li>
                            <li>• Next.js & Nuxt.js</li>
                        </ul>
                    </div>
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Backend</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Laravel & PHP</li>
                            <li>• Node.js</li>
                            <li>• Python & Django</li>
                            <li>• RESTful APIs</li>
                        </ul>
                    </div>
                </div>
                <div class="text-2xl font-bold text-white mb-2">Price: Negotiable</div>
                <p class="text-gray-400 text-sm mb-6">Let's discuss your budget and project needs</p>
                <a href="{{ route('contact') }}" class="bg-white text-black px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">
                    Get Quote
                </a>
            </div>

            <!-- E-commerce Solutions -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300">
                <div class="w-16 h-16 bg-white/10 rounded-xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-white mb-6">E-commerce Solutions</h2>
                <p class="text-gray-400 mb-8 text-lg">
                    Powerful online stores that convert visitors into customers with seamless shopping experiences.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Features</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Payment Gateway</li>
                            <li>• Inventory Management</li>
                            <li>• Order Tracking</li>
                            <li>• Customer Accounts</li>
                        </ul>
                    </div>
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Platforms</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Custom Laravel</li>
                            <li>• WooCommerce</li>
                            <li>• Shopify Plus</li>
                            <li>• Magento</li>
                        </ul>
                    </div>
                </div>
                <div class="text-2xl font-bold text-white mb-2">Price: Negotiable</div>
                <p class="text-gray-400 text-sm mb-6">Pricing based on features and complexity</p>
                <a href="{{ route('contact') }}" class="bg-white text-black px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">
                    Get Quote
                </a>
            </div>


            <!-- UI/UX Design -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-300">
                <div class="w-16 h-16 bg-white/10 rounded-xl flex items-center justify-center mb-8">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-white mb-6">UI/UX Design</h2>
                <p class="text-gray-400 mb-8 text-lg">
                    Beautiful, intuitive designs that enhance user experience and drive conversions.
                </p>
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Design Process</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• User Research</li>
                            <li>• Wireframing</li>
                            <li>• Prototyping</li>
                            <li>• User Testing</li>
                        </ul>
                    </div>
                    <div class="bg-white/5 rounded-lg p-4">
                        <h4 class="text-white font-semibold mb-2">Deliverables</h4>
                        <ul class="text-sm text-gray-300 space-y-1">
                            <li>• Design System</li>
                            <li>• High-fidelity Mockups</li>
                            <li>• Interactive Prototypes</li>
                            <li>• Style Guide</li>
                        </ul>
                    </div>
                </div>
                <div class="text-2xl font-bold text-white mb-2">Price: Negotiable</div>
                <p class="text-gray-400 text-sm mb-6">Flexible pricing to fit your budget</p>
                <a href="{{ route('contact') }}" class="bg-white text-black px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">
                    Get Quote
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                How We <span class="gradient-text">Work</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Our proven process ensures successful project delivery every time.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">1. Discovery</h3>
                <p class="text-gray-400">Understanding your business goals, target audience, and project requirements through detailed consultation.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">2. Design</h3>
                <p class="text-gray-400">Creating wireframes, prototypes, and visual designs that align with your brand and user needs.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">3. Development</h3>
                <p class="text-gray-400">Building your solution using cutting-edge technologies, best practices, and agile methodology.</p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">4. Launch</h3>
                <p class="text-gray-400">Deploying your project with thorough testing, optimization, and ongoing support.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Ready to Start <span class="gradient-text">Your Project</span>?
        </h2>
        <p class="text-xl text-gray-400 mb-12">
            Let's discuss your requirements and create something amazing together.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-200 transition-all duration-300 hover-glow">
                Get Free Consultation
            </a>
            <a href="{{ route('portfolio') }}" class="border border-white/20 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                View Our Work
            </a>
        </div>
    </div>
</section>
@endsection

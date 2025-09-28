@extends('layouts.app')

@section('title', 'WebCraft - Build and Deploy on the Modern Web')
@section('description', 'Professional website development services. We build fast, modern, and scalable web applications that drive results for your business.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center bg-black bg-grid overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black opacity-90"></div>
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-white/3 rounded-full blur-2xl animate-pulse delay-1000"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Main Headline -->
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-tight">
            <span class="gradient-text">Build and deploy</span><br>
            <span class="text-white">on the Modern Web</span>
        </h1>
        
        <!-- Subheadline -->
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
            WebCraft provides the developer expertise and cutting-edge solutions to build, scale, 
            and secure a faster, more personalized web experience for your business.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-200 transition-all duration-300 hover-glow">
                Start Your Project
            </a>
            <a href="{{ route('portfolio') }}" class="border border-white/20 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                View Our Work
            </a>
        </div>
        
        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">1</div>
                <div class="text-gray-400 text-sm uppercase tracking-wide">Project In Development</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">0</div>
                <div class="text-gray-400 text-sm uppercase tracking-wide">Clients (Yet!)</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">100%</div>
                <div class="text-gray-400 text-sm uppercase tracking-wide">Commitment</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2">24/7</div>
                <div class="text-gray-400 text-sm uppercase tracking-wide">Availability</div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Services Overview -->
<section class="py-20 bg-black" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                What We <span class="gradient-text">Build</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                From concept to deployment, we create digital experiences that drive growth and engagement.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Web Development -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-300 hover-glow">
                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Web Development</h3>
                <p class="text-gray-400 mb-6">Custom websites and web applications built with modern frameworks like React, Vue, and Laravel.</p>
                <ul class="text-sm text-gray-300 space-y-2">
                    <li>• Responsive Design</li>
                    <li>• Performance Optimization</li>
                    <li>• SEO-Friendly</li>
                    <li>• Cross-Browser Compatible</li>
                </ul>
            </div>
            
            <!-- E-commerce -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-300 hover-glow">
                <div class="w-12 h-12 bg-white/10 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">E-commerce Solutions</h3>
                <p class="text-gray-400 mb-6">Powerful online stores that convert visitors into customers with seamless shopping experiences.</p>
                <ul class="text-sm text-gray-300 space-y-2">
                    <li>• Payment Integration</li>
                    <li>• Inventory Management</li>
                    <li>• Mobile Commerce</li>
                    <li>• Analytics & Reporting</li>
                </ul>
            </div>
            
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="inline-flex items-center text-white hover:text-gray-300 transition-colors font-medium">
                View All Services
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Our <span class="gradient-text">Process</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                A proven methodology that delivers exceptional results, every time.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Discovery</h3>
                <p class="text-gray-400">We understand your business goals, target audience, and project requirements.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Design</h3>
                <p class="text-gray-400">Create wireframes, prototypes, and visual designs that align with your brand.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Development</h3>
                <p class="text-gray-400">Build your solution using cutting-edge technologies and best practices.</p>
            </div>
            
            <div class="text-center">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Launch</h3>
                <p class="text-gray-400">Deploy your project and provide ongoing support and maintenance.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Ready to <span class="gradient-text">Get Started</span>?
        </h2>
        <p class="text-xl text-gray-400 mb-12">
            Let's discuss your project and bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-200 transition-all duration-300 hover-glow">
                Start Your Project
            </a>
            <a href="mailto:your-email@example.com" class="border border-white/20 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                Send us an Email
            </a>
        </div>
    </div>
</section>
@endsection

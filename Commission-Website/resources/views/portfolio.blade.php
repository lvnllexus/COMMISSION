@extends('layouts.app')

@section('title', 'Our Portfolio - WebCraft')
@section('description', 'Explore our portfolio of successful web development projects, e-commerce solutions, and mobile applications.')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-black bg-grid">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black opacity-90"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-black mb-8">
            <span class="gradient-text">Our Work</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto">
            We're just getting started! Here's our latest project currently in development.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Current Project Section -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl overflow-hidden hover:bg-white/10 transition-all duration-300">
                <div class="aspect-video bg-gradient-to-br from-green-600 to-blue-600 relative overflow-hidden">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-white text-2xl font-bold text-center">Classroom<br>Occupancy<br>System</div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h3 class="text-2xl font-bold text-white">Classroom Occupancy System</h3>
                        <span class="px-3 py-1 bg-blue-600/20 border border-blue-600/30 rounded-full text-xs text-blue-300 font-medium">
                            Thesis Project
                        </span>
                    </div>
                    <p class="text-gray-400 mb-6 text-lg">
                        A comprehensive system for monitoring and managing classroom occupancy at Technological University of the Philippines Visayas. 
                        Developed as our thesis project for Computer Engineering Technology program.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h4 class="text-white font-semibold mb-3">Technologies Used</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300">PHP</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300">MySQL</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300">HTML/CSS</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300">JavaScript</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300">Bootstrap</span>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-3">Key Features</h4>
                            <ul class="text-sm text-gray-300 space-y-1">
                                <li>• Real-time Occupancy Tracking</li>
                                <li>• Room Scheduling System</li>
                                <li>• Admin Dashboard</li>
                                <li>• Reporting & Analytics</li>
                                <li>• User Management</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-400">
                            <span class="font-medium">Institution:</span> TUP Visayas • <span class="font-medium">Program:</span> Computer Engineering Technology
                        </div>
                        <div class="text-sm text-gray-500">
                            Thesis Project
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Coming Soon Section -->
        <div class="mt-16 text-center">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-12 max-w-2xl mx-auto">
                <div class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">More Projects Coming Soon</h3>
                <p class="text-gray-400 mb-6">
                    We're just getting started! As we complete more projects for our clients, 
                    this portfolio will showcase the amazing websites and applications we've built.
                </p>
                <p class="text-sm text-gray-500">
                    Want to be our next client? Let's discuss your project and make it happen.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Ready to Be <span class="gradient-text">Our First Client</span>?
        </h2>
        <p class="text-xl text-gray-400 mb-12">
            We're excited to work with our first clients and create amazing digital experiences together. Your project could be the start of our success story.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-200 transition-all duration-300 hover-glow">
                Start Your Project
            </a>
            <a href="{{ route('services') }}" class="border border-white/20 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                View Our Services
            </a>
        </div>
    </div>
</section>
@endsection

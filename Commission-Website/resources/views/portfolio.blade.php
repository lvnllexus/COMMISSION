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
                <div class="aspect-video relative overflow-hidden bg-gray-100">
                    <!-- Simulated Dashboard Background -->
                    <div class="absolute inset-0 bg-gray-100">
                        <!-- Red Header -->
                        <div class="absolute top-3 left-3 right-3 h-10 bg-red-500 rounded flex items-center px-3">
                            <div class="w-4 h-4 bg-white rounded-full mr-2"></div>
                            <div class="text-white font-bold text-xs">CLASSROOM OCCUPANCY SYSTEM</div>
                            <div class="ml-auto flex space-x-1">
                                <div class="w-3 h-3 bg-white/70 rounded"></div>
                                <div class="w-3 h-3 bg-white/70 rounded"></div>
                            </div>
                        </div>
                        
                        <!-- Dashboard Title -->
                        <div class="absolute top-16 left-0 right-0 text-center">
                            <div class="text-red-500 font-bold text-sm mb-1">DASHBOARD</div>
                            <div class="text-gray-600 text-xs">Sunday, September 28, 2025 | 06:10:19 PM</div>
                        </div>
                        
                        <!-- Controls -->
                        <div class="absolute top-28 left-3 right-3 flex justify-between">
                            <div class="bg-white border border-gray-300 rounded px-2 py-1 text-xs text-gray-700">All Departments</div>
                            <div class="bg-white border border-gray-300 rounded px-2 py-1 text-xs text-gray-500 w-32">Search classrooms...</div>
                        </div>
                        
                        <!-- Available Section -->
                        <div class="absolute top-36 left-3 right-3">
                            <div class="bg-red-500 rounded px-2 py-1 text-white font-bold text-xs mb-2">Available Classrooms • 17</div>
                        </div>
                        
                        <!-- Cards Grid -->
                        <div class="absolute top-44 left-3 right-3 bottom-3 grid grid-cols-3 gap-2">
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">AutoMotive Room 1</div>
                                <div class="text-green-600 text-xs">Available</div>
                                <div class="text-red-500 text-xs">Click to view schedule</div>
                            </div>
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">Automotive Room 101</div>
                                <div class="text-green-600 text-xs">Available</div>
                                <div class="text-red-500 text-xs">Click to view schedule</div>
                            </div>
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">Chem Lab 1</div>
                                <div class="text-green-600 text-xs">Available</div>
                                <div class="text-red-500 text-xs">Click to view schedule</div>
                            </div>
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">Computer Laboratory 2</div>
                                <div class="text-green-600 text-xs">Available</div>
                            </div>
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">Computer Laboratory 3</div>
                                <div class="text-green-600 text-xs">Available</div>
                            </div>
                            <div class="bg-white rounded border border-gray-200 p-2">
                                <div class="text-gray-800 font-semibold text-xs">ECE1</div>
                                <div class="text-green-600 text-xs">Available</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blur and Darken Overlay -->
                    <div class="absolute inset-0 backdrop-blur-sm bg-black/40"></div>
                    
                    <!-- Center Content -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-white text-2xl font-bold text-center drop-shadow-2xl">Classroom<br>Occupancy<br>System</div>
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
                    <div class="grid grid-cols-2 gap-8 mb-6">
                        <div>
                            <h4 class="text-white font-semibold mb-3">Technologies Used</h4>
                            <div class="grid grid-cols-2 gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300 text-center">PHP</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300 text-center">MySQL</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300 text-center">HTML/CSS</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs text-gray-300 text-center">JavaScript</span>
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

@extends('layouts.app')

@section('title', 'About Us - WebCraft')
@section('description', 'Learn about our team, mission, and commitment to delivering exceptional web development services.')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-black bg-grid">
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black opacity-90"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-black mb-8">
            <span class="gradient-text">About WebCraft</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto">
            We're passionate developers and designers dedicated to crafting exceptional digital experiences.
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-20 bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-8">
                    Our <span class="gradient-text">Mission</span>
                </h2>
                <p class="text-xl text-gray-300 mb-6">
                    We believe that great web development goes beyond just writing code. It's about understanding your business, 
                    your users, and creating solutions that drive real results.
                </p>
                <p class="text-lg text-gray-400 mb-8">
                    As soon-to-be graduates of Computer Engineering Technology from Technological University of the Philippines Visayas, 
                    we bring fresh perspectives, modern technical skills, and academic rigor to every project we undertake.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <div class="text-3xl font-bold text-white mb-2">New</div>
                        <div class="text-gray-400">Fresh Start</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-2">1</div>
                        <div class="text-gray-400">Project In Progress</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-2">0</div>
                        <div class="text-gray-400">Clients (Looking for our first!)</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-white mb-2">100%</div>
                        <div class="text-gray-400">Dedication</div>
                    </div>
                </div>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-white mb-6">What Sets Us Apart</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Modern Technologies</h4>
                            <p class="text-gray-400 text-sm">We use the latest frameworks and tools to build future-proof solutions.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Agile Process</h4>
                            <p class="text-gray-400 text-sm">Transparent communication and iterative development for better results.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold mb-1">Ongoing Support</h4>
                            <p class="text-gray-400 text-sm">We're here for you long after launch with maintenance and updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Our <span class="gradient-text">Team</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                Meet the founders behind WebCraft
            </p>
        </div>
        
        <!-- Team Background -->
        <div class="max-w-4xl mx-auto mb-16">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-12 text-center">
                <div class="w-20 h-20 bg-white/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Meet the Founders</h3>
                <p class="text-gray-400 mb-6">
                    We're Computer Engineering Technology students at Technological University of the Philippines Visayas, 
                    soon to graduate and ready to bring our academic knowledge and fresh ideas to the professional world.
                </p>
                <p class="text-sm text-gray-500">
                    Our thesis project, the Classroom Occupancy System, demonstrates our ability to create practical, 
                    real-world solutions using modern web technologies.
                </p>
            </div>
        </div>
        
        <!-- Team Members -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Pacilan, Brian Nicholas</h3>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Rome, John Michael</h3>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Catindoy, Jireh</h3>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Almaiz, Rene Alexis</h3>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Raquinel, Kurt John</h3>
            </div>
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 text-center hover:bg-white/10 transition-all duration-300">
                <h3 class="text-xl font-semibold text-white">Baterna, John RV</h3>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-black">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
            Ready to Work <span class="gradient-text">Together</span>?
        </h2>
        <p class="text-xl text-gray-400 mb-12">
            Let's discuss your project and see how we can help bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-black px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-200 transition-all duration-300 hover-glow">
                Get In Touch
            </a>
            <a href="{{ route('portfolio') }}" class="border border-white/20 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:bg-white/10 transition-all duration-300">
                View Our Work
            </a>
        </div>
    </div>
</section>
@endsection

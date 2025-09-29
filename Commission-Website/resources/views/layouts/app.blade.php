<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WebCraft - Premium Website Development Services')</title>
    <meta name="description" content="@yield('description', 'Professional website development services. We build fast, modern, and scalable web applications using cutting-edge technologies.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'dark': {
                            50: '#f8f9fa',
                            100: '#f1f3f4',
                            200: '#e8eaed',
                            300: '#dadce0',
                            400: '#bdc1c6',
                            500: '#9aa0a6',
                            600: '#80868b',
                            700: '#5f6368',
                            800: '#3c4043',
                            900: '#202124',
                            950: '#0f0f0f'
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #ffffff 0%, #a0a0a0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .glow-effect {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }
        
        .hover-glow:hover {
            box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
            transition: box-shadow 0.3s ease;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .bg-grid {
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
        }
    </style>
</head>
<body class="bg-black text-white font-sans antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-black/80 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold gradient-text">
                        WebCraft
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="{{ route('home') }}" class="hover:text-gray-300 transition-colors duration-200 {{ request()->routeIs('home') ? 'text-white' : 'text-gray-400' }}">
                            Home
                        </a>
                        <a href="{{ route('services') }}" class="hover:text-gray-300 transition-colors duration-200 {{ request()->routeIs('services') ? 'text-white' : 'text-gray-400' }}">
                            Services
                        </a>
                        <a href="{{ route('portfolio') }}" class="hover:text-gray-300 transition-colors duration-200 {{ request()->routeIs('portfolio') ? 'text-white' : 'text-gray-400' }}">
                            Portfolio
                        </a>
                        <a href="{{ route('about') }}" class="hover:text-gray-300 transition-colors duration-200 {{ request()->routeIs('about') ? 'text-white' : 'text-gray-400' }}">
                            About
                        </a>
                        <a href="{{ route('contact') }}" class="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 transition-colors duration-200 font-medium">
                            Get Started
                        </a>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-gray-400 hover:text-white focus:outline-none focus:text-white" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-black/95 backdrop-blur-md">
                <a href="{{ route('home') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('home') ? 'text-white' : 'text-gray-400' }} hover:text-white">Home</a>
                <a href="{{ route('services') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('services') ? 'text-white' : 'text-gray-400' }} hover:text-white">Services</a>
                <a href="{{ route('portfolio') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('portfolio') ? 'text-white' : 'text-gray-400' }} hover:text-white">Portfolio</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 text-base font-medium {{ request()->routeIs('about') ? 'text-white' : 'text-gray-400' }} hover:text-white">About</a>
                <a href="{{ route('contact') }}" class="block px-3 py-2 text-base font-medium text-white bg-white/10 rounded-md">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-white/10 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="text-2xl font-bold gradient-text mb-4">WebCraft</div>
                    <p class="text-gray-400 mb-6 max-w-md">
                        We build exceptional web experiences that drive results. From concept to deployment, 
                        we're your trusted partner in digital transformation.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-4">Services</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">E-commerce</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Website Maintenance</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-4">Company</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-white transition-colors">Portfolio</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} WebCraft. All rights reserved. Built with passion and cutting-edge technology.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-black/95');
            } else {
                nav.classList.remove('bg-black/95');
            }
        });
    </script>
</body>
</html>

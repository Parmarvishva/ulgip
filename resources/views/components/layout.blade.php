<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ULGIP') }} - {{ __('Unified Legal & Government Intelligence Platform') }}</title>
    <meta name="description" content="AI-Powered Intelligence Platform for the Cyber Crime Innovation Challenge 2026.">

    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind Play CDN for environment without Node.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0F172A',
                        'gov-blue': '#1E3A8A',
                        accent: '#2563EB',
                        success: '#10B981',
                        background: '#F8FAFC',
                        card: '#FFFFFF',
                        border: '#E2E8F0',
                        text: '#0F172A',
                        'text-muted': '#64748B',
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                        'spin-slow': 'spin 3s linear infinite',
                        'marquee': 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: 0, transform: 'translateY(20px)' },
                            '100%': { opacity: 1, transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Dark Mode Initializer to prevent Flash of Unstyled Content -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF; /* Match clean background of image */
        }
        .dark body {
            background-color: #020617; /* Slate 950 */
        }
        /* Loading Overlay */
        #loading-overlay {
            transition: opacity 0.5s ease-out;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="text-text dark:text-slate-300 antialiased relative min-h-screen selection:bg-accent selection:text-white transition-colors duration-300">
    
    <!-- Loading Screen -->
    <div id="loading-overlay" class="fixed inset-0 z-[100] bg-white dark:bg-slate-950 flex items-center justify-center">
        <div class="relative w-24 h-24">
            <div class="absolute inset-0 rounded-full border-4 border-transparent border-t-gov-blue animate-spin"></div>
            <div class="absolute inset-2 rounded-full border-4 border-transparent border-b-accent animate-spin-slow"></div>
            <div class="absolute inset-4 rounded-full border-4 border-transparent border-l-success animate-pulse"></div>
        </div>
    </div>

    <div class="relative z-10 flex flex-col min-h-screen">
        <x-navbar />

        <main class="flex-grow pt-20"> <!-- Added pt-20 to account for fixed navbar -->
            {{ $slot }}
        </main>

        <!-- Live Cyber Alerts Ticker -->
        <div class="bg-[#0A1020] text-white border-y border-slate-800 flex items-center px-4 py-2 relative overflow-hidden">
            <div class="flex items-center gap-2 font-bold text-sm bg-[#0A1020] z-10 pr-4 whitespace-nowrap">
                <i data-lucide="bell-ring" class="w-4 h-4 text-[#F59E0B]"></i>
                {{ __('Live Cyber Alerts') }}
            </div>
            <div class="flex-grow overflow-hidden relative flex items-center">
                <div class="flex items-center whitespace-nowrap animate-marquee text-xs font-medium text-slate-300">
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-red-500"></div> {{ __('Beware of Fake Loan Apps') }}</span>
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-yellow-500"></div> {{ __('New Phishing Campaign Detected') }}</span>
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-green-500"></div> {{ __('Stay Safe. Stay Secure.') }}</span>
                    
                    <!-- Repeat for seamless scrolling -->
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-red-500"></div> {{ __('Beware of Fake Loan Apps') }}</span>
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-yellow-500"></div> {{ __('New Phishing Campaign Detected') }}</span>
                    <span class="mx-6 flex items-center gap-2"><div class="w-2 h-2 rounded-full bg-green-500"></div> {{ __('Stay Safe. Stay Secure.') }}</span>
                </div>
            </div>
            <a href="{{ route('cyber.alerts') }}" class="ml-auto flex items-center gap-1 text-xs font-semibold bg-transparent border border-slate-600 rounded-full px-3 py-1 hover:bg-slate-800 transition-colors z-10 whitespace-nowrap">
                {{ __('View All Alerts') }} &rarr;
            </a>
        </div>

        <x-footer />
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-16 right-8 z-50 p-3 rounded-full bg-gov-blue text-white shadow-lg shadow-gov-blue/30 transform scale-0 opacity-0 transition-all duration-300 hover:bg-accent focus:outline-none">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    <!-- Global Scripts -->
    <script>
        // Initialize Icons
        lucide.createIcons();

        // Loading Screen Fade Out
        window.addEventListener('load', () => {
            const loader = document.getElementById('loading-overlay');
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        });

        // Dark Mode Toggle Logic
        const themeToggleBtns = document.querySelectorAll('.theme-toggle');
        const themeToggleLightIcons = document.querySelectorAll('.theme-toggle-light-icon');
        const themeToggleDarkIcons = document.querySelectorAll('.theme-toggle-dark-icon');

        function updateIcons() {
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcons.forEach(icon => icon.classList.remove('hidden'));
                themeToggleDarkIcons.forEach(icon => icon.classList.add('hidden'));
            } else {
                themeToggleLightIcons.forEach(icon => icon.classList.add('hidden'));
                themeToggleDarkIcons.forEach(icon => icon.classList.remove('hidden'));
            }
        }
        
        updateIcons();

        themeToggleBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                themeToggleDarkIcons.forEach(icon => icon.classList.toggle('hidden'));
                themeToggleLightIcons.forEach(icon => icon.classList.toggle('hidden'));

                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }
            });
        });

        // Back to Top Logic
        const backToTopButton = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('scale-0', 'opacity-0');
                backToTopButton.classList.add('scale-100', 'opacity-100');
            } else {
                backToTopButton.classList.add('scale-0', 'opacity-0');
                backToTopButton.classList.remove('scale-100', 'opacity-100');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Mobile Menu Toggle Logic
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuIcon = document.getElementById('mobile-menu-icon');
        const mobileMenuCloseIcon = document.getElementById('mobile-menu-close-icon');

        if(mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                mobileMenuIcon.classList.toggle('hidden');
                mobileMenuCloseIcon.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>

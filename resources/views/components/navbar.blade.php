@php
    $currentRoute = Route::currentRouteName();
@endphp

<header class="fixed top-0 w-full z-50 bg-white/90 dark:bg-slate-900/90 backdrop-blur-xl border-b border-border dark:border-slate-800 transition-all duration-300">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo Area -->
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-4 cursor-pointer group">
                <!-- Exact Custom SVG Logo: Shield + Scales of Justice + Stars -->
                <div class="w-12 h-12 relative text-gov-blue dark:text-accent group-hover:scale-105 transition-transform duration-300">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full drop-shadow-sm">
                        <!-- Shield Base -->
                        <path d="M50 5L15 20V45C15 68 30 88 50 95C70 88 85 68 85 45V20L50 5Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <!-- Inner Shield Line -->
                        <path d="M50 12L22 24V45C22 64 34 80 50 86C66 80 78 64 78 45V24L50 12Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                        
                        <!-- Scales of Justice -->
                        <path d="M50 25V65 M35 65H65 M50 25L50 20" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                        <!-- Beam -->
                        <path d="M30 35H70" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                        <!-- Strings and Pans -->
                        <path d="M30 35L20 55H40L30 35Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                        <path d="M70 35L60 55H80L70 35Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                        
                        <!-- Small Stars -->
                        <circle cx="35" cy="20" r="1.5" fill="#FFFFFF"/>
                        <circle cx="65" cy="20" r="1.5" fill="#FFFFFF"/>
                        <circle cx="20" cy="35" r="1.5" fill="#FFFFFF"/>
                        <circle cx="80" cy="35" r="1.5" fill="#FFFFFF"/>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-bold leading-tight tracking-tight text-primary dark:text-white">Unified Legal & Government<br>Intelligence Platform</span>
                </div>
            </a>

           <!-- Desktop Navigation -->
<nav class="hidden lg:flex items-center gap-8 h-full">

    <a href="{{ route('home') }}" class="relative h-full flex items-center text-sm font-semibold transition-colors hover:text-accent {{ $currentRoute == 'home' ? 'text-accent dark:text-accent' : 'text-primary dark:text-slate-300' }}">
       {{ __('Home') }}
        @if($currentRoute == 'home')
            <div class="absolute bottom-0 left-0 w-full h-1 bg-accent rounded-t-md"></div>
        @endif
    </a>

    <a href="{{ route('home') }}#features" class="relative h-full flex items-center text-sm font-medium transition-colors hover:text-accent text-primary dark:text-slate-300">
        {{ __('Features') }}
    </a>

    <a href="{{ route('ai.assistant') }}" class="relative h-full flex items-center text-sm font-medium transition-colors hover:text-accent {{ $currentRoute == 'ai.assistant' ? 'text-accent font-semibold' : 'text-primary dark:text-slate-300' }}">
        {{ __('AI Assistant') }}
        @if($currentRoute == 'ai.assistant')
            <div class="absolute bottom-0 left-0 w-full h-1 bg-accent rounded-t-md"></div>
        @endif
    </a>

    <div class="relative group h-full flex items-center cursor-pointer">
        <div class="flex items-center gap-1 text-sm font-medium text-primary dark:text-slate-300 group-hover:text-accent transition-colors">
            {{ __('Resources') }}
            <i data-lucide="chevron-down" class="w-4 h-4"></i>
        </div>

        <div class="absolute top-full left-0 mt-0 w-48 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-border dark:border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top translate-y-2 group-hover:translate-y-0">
            <div class="py-2">
                <a href="{{ route('legal.library') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">Legal Library</a>
                <a href="{{ route('circulars') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">Government Circulars</a>
                <a href="{{ route('search') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">Smart Search</a>
                <a href="{{ route('resources') }}" class="block px-4 py-2 text-sm hover:bg-slate-50 dark:hover:bg-slate-700">Download Center</a>
            </div>
        </div>
    </div>

    <a href="{{ route('about') }}" class="relative h-full flex items-center text-sm font-medium transition-colors hover:text-accent {{ $currentRoute == 'about' ? 'text-accent font-semibold' : 'text-primary dark:text-slate-300' }}">
        {{ __('About') }}
        @if($currentRoute == 'about')
            <div class="absolute bottom-0 left-0 w-full h-1 bg-accent rounded-t-md"></div>
        @endif
    </a>

    <a href="{{ route('contact') }}" class="relative h-full flex items-center text-sm font-medium transition-colors hover:text-accent {{ $currentRoute == 'contact' ? 'text-accent font-semibold' : 'text-primary dark:text-slate-300' }}">
        {{ __('Contact') }}
        @if($currentRoute == 'contact')
            <div class="absolute bottom-0 left-0 w-full h-1 bg-accent rounded-t-md"></div>
        @endif
    </a>

</nav>
                

            <!-- Actions -->
            <div class="hidden lg:flex items-center gap-4">
                
                <!-- Dark Mode Toggle (Match image styling) -->
                <button class="theme-toggle text-text-muted dark:text-slate-400 hover:text-primary dark:hover:text-white transition-colors p-2 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700">
                    <i data-lucide="moon" class="w-4 h-4 theme-toggle-dark-icon hidden"></i>
                    <i data-lucide="sun" class="w-4 h-4 theme-toggle-light-icon hidden"></i>
                </button>

                <!-- Language Selector -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-sm font-medium text-primary dark:text-slate-300 hover:text-accent transition-colors">
{{ app()->getLocale() }}                        <i data-lucide="chevron-down" class="w-3 h-3 text-text-muted"></i>
                    </button>
                    <!-- Dropdown -->
                    <div class="absolute right-0 mt-2 w-32 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-border dark:border-slate-700 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                        <div class="py-1">
                            <a href="{{ route('lang.switch', 'en') }}" class="block px-4 py-2 text-sm text-primary dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-accent">English</a>
                            <a href="{{ route('lang.switch', 'hi') }}" class="block px-4 py-2 text-sm text-primary dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-accent">हिंदी (Hindi)</a>
                            <a href="{{ route('lang.switch', 'gu') }}" class="block px-4 py-2 text-sm text-primary dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 hover:text-accent">ગુજરાતી</a>
                        </div>
                    </div>
                </div>

                <div class="w-px h-6 bg-border dark:bg-slate-700 mx-1"></div>

                <!-- Auth Buttons matching Image EXACTLY -->
                @auth
                    <a href="{{ route('dashboard') }}" class="px-5 py-2 rounded-lg bg-accent hover:bg-blue-700 text-white text-sm font-semibold transition-colors shadow-sm">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-accent dark:text-blue-400 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm font-semibold transition-colors">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-5 py-2 rounded-lg bg-accent hover:bg-blue-700 text-white text-sm font-semibold transition-colors shadow-sm">
                        Get Started
                    </a>
                @endauth
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden flex items-center gap-3">
                <button class="theme-toggle text-text-muted dark:text-slate-400 p-2">
                    <i data-lucide="moon" class="w-5 h-5 theme-toggle-dark-icon hidden"></i>
                    <i data-lucide="sun" class="w-5 h-5 theme-toggle-light-icon hidden"></i>
                </button>
                <button id="mobile-menu-btn" class="text-primary dark:text-white p-2">
                    <i data-lucide="menu" id="mobile-menu-icon" class="w-6 h-6"></i>
                    <i data-lucide="x" id="mobile-menu-close-icon" class="w-6 h-6 hidden"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white dark:bg-slate-900 border-t border-border dark:border-slate-800">
        <div class="px-4 pt-2 pb-6 space-y-1">
<a href="{{ route('home') }}" class="block px-3 py-3 rounded-lg text-base font-medium text-primary dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800">
    {{ __('Home') }}
</a>            <a href="{{ route('ai.assistant') }}" class="block px-3 py-3 rounded-lg text-base font-medium text-primary dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800">
    {{ __('AI Assistant') }}
</a>
            <a href="{{ route('legal.library') }}" class="block px-3 py-3 rounded-lg text-base font-medium text-primary dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800">
    {{ __('Resources') }}
</a>
            <a href="{{ route('about') }}" class="block px-3 py-3 rounded-lg text-base font-medium text-primary dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800">
    {{ __('About') }}
</a>
            <a href="{{ route('contact') }}" class="block px-3 py-3 rounded-lg text-base font-medium text-primary dark:text-white hover:bg-slate-50 dark:hover:bg-slate-800">
    {{ __('Contact') }}
</a>

            <div class="border-t border-border dark:border-slate-800 my-2 pt-2">
                <div class="flex gap-2 px-3">
                    <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1 rounded border border-border dark:border-slate-700 text-sm dark:text-white">EN</a>
                    <a href="{{ route('lang.switch', 'hi') }}" class="px-3 py-1 rounded border border-border dark:border-slate-700 text-sm dark:text-white">HI</a>
                    <a href="{{ route('lang.switch', 'gu') }}" class="px-3 py-1 rounded border border-border dark:border-slate-700 text-sm dark:text-white">GU</a>
                </div>
            </div>

            <div class="mt-4 pt-4 border-t border-border dark:border-slate-800 flex flex-col gap-3">
                @auth
                    <a href="{{ route('dashboard') }}" class="flex items-center justify-center gap-2 w-full px-5 py-3 rounded-lg bg-accent text-white font-semibold">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 w-full px-5 py-3 rounded-lg border border-slate-300 dark:border-slate-600 text-accent font-semibold">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="flex items-center justify-center gap-2 w-full px-5 py-3 rounded-lg bg-accent text-white font-semibold">
                        Get Started
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>

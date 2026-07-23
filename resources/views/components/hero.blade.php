<section class="relative pt-24 pb-32 lg:pt-36 lg:pb-48 overflow-visible bg-white dark:bg-[#020617] border-b border-border/50 dark:border-slate-800">
    <!-- Abstract gradient background for the whole section (very subtle) -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-blue-50 dark:bg-blue-900/10 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl opacity-70 transform translate-x-1/3 -translate-y-1/4"></div>
    </div>

    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Hero Content (Left, takes 5 columns) -->
            <div class="lg:col-span-5 max-w-2xl animate-fade-in-up">
                
                <!-- Tag -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 dark:bg-blue-900/20 text-accent dark:text-blue-400 text-sm font-semibold mb-6 border border-blue-100 dark:border-blue-800/30 shadow-sm">
                    <div class="w-4 h-4 rounded-full bg-accent flex items-center justify-center text-white">
                        <i data-lucide="check" class="w-3 h-3"></i>
                    </div>
                    {{ __('Empowering Law Enforcement with AI') }}
                    <span class="w-1.5 h-1.5 rounded-full bg-accent animate-pulse ml-1"></span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-primary dark:text-white leading-[1.1] mb-6 tracking-tight">
{{ __('Unified Legal &') }}<br>
{{ __('Government Intelligence') }}<br>
<span class="text-accent">{{ __('Platform') }}</span>                    <span class="text-accent">{{ __('Platform') }}</span>
                </h1>
                
                <p class="text-lg text-text-muted dark:text-slate-400 mb-10 leading-relaxed">
                    {{ __('A secure AI-powered platform that enables Police Officers and Government Departments to access laws, legal documents, circulars, SOPs, AI assistance and smart search from one unified system.') }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-12">
                    <a href="{{ route('home') }}#features" class="inline-flex justify-center items-center gap-2 px-6 py-3.5 rounded-xl bg-accent hover:bg-blue-700 text-white text-base font-semibold transition-all duration-300 shadow-lg shadow-accent/20">
                        {{ __('Explore Platform') }}
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                    <a href="{{ route('ai.assistant') }}" class="inline-flex justify-center items-center gap-2 px-6 py-3.5 rounded-xl bg-white dark:bg-slate-800 text-primary dark:text-white border-2 border-border dark:border-slate-700 text-base font-semibold hover:border-accent dark:hover:border-accent hover:text-accent transition-all duration-300 shadow-sm">
                        {{ __('Try AI Assistant') }}
                        <i data-lucide="sparkles" class="w-5 h-5"></i>
                    </a>
                </div>

                <!-- Small Stats / Badges row -->
                <div class="flex flex-wrap items-center gap-6 gap-y-4 pt-4 border-t border-border dark:border-slate-800 text-sm font-medium text-text-muted dark:text-slate-400">
                    <div class="flex items-center gap-2 bg-slate-50 dark:bg-slate-800/50 px-3 py-1.5 rounded-lg border border-border dark:border-slate-700">
                        <i data-lucide="building-2" class="w-4 h-4"></i> {{ __('Government Ready') }}
                    </div>
                    <div class="flex items-center gap-2 bg-slate-50 dark:bg-slate-800/50 px-3 py-1.5 rounded-lg border border-border dark:border-slate-700">
                        <i data-lucide="cpu" class="w-4 h-4"></i> {{ __('AI Powered') }}
                    </div>
                    <div class="flex items-center gap-2 bg-green-50 dark:bg-green-900/10 px-3 py-1.5 rounded-lg border border-green-200 dark:border-green-900/30 text-success">
                        <i data-lucide="shield-check" class="w-4 h-4"></i> {{ __('Secure Platform') }}
                    </div>
                    <div class="flex items-center gap-2 bg-slate-50 dark:bg-slate-800/50 px-3 py-1.5 rounded-lg border border-border dark:border-slate-700">
                        <i data-lucide="users" class="w-4 h-4"></i> {{ __('Role Based Access') }}
                    </div>
                </div>
            </div>

            <!-- Hero Illustration (Right, takes 7 columns) -->
            <div class="lg:col-span-7 relative h-[600px] w-full hidden lg:block">
                <!-- Massive Composition matching the image layout using SVG and CSS -->
                
                <!-- Background Glowing HUD / Circles -->
                <div class="absolute inset-0 flex items-center justify-center -translate-y-10">
                    <div class="w-[500px] h-[500px] rounded-full border border-blue-200 dark:border-blue-900/50 absolute animate-[spin_60s_linear_infinite]"></div>
                    <div class="w-[400px] h-[400px] rounded-full border-2 border-dashed border-blue-300 dark:border-blue-800/50 absolute animate-[spin_40s_linear_infinite_reverse]"></div>
                    <!-- Central Glow -->
                    <div class="w-64 h-64 bg-accent/20 dark:bg-accent/40 rounded-full blur-[80px] absolute"></div>
                </div>

                <!-- Custom SVG Composition -->
                <div class="absolute inset-0 z-10 w-full h-full pointer-events-none drop-shadow-2xl">
                    <svg viewBox="0 0 800 600" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                        
                        <!-- AI Brain Graphic (Top Right) -->
                        <g transform="translate(480, 50)" class="animate-float" style="animation-delay: 0.5s;">
                            <!-- Glowing box -->
                            <rect x="-60" y="-50" width="160" height="120" rx="16" fill="white" fill-opacity="0.1" stroke="#38BDF8" stroke-width="2" class="backdrop-blur-md"/>
                            <!-- Brain paths -->
                            <path d="M20 5C5 5 -5 15 -5 30C-5 45 5 55 20 55C35 55 45 45 45 30C45 15 35 5 20 5Z" stroke="#38BDF8" stroke-width="2" fill="none"/>
                            <path d="M-5 30H-20 M45 30H60 M20 5V-10 M20 55V70" stroke="#38BDF8" stroke-width="2" stroke-dasharray="4 2"/>
                            <!-- Text "AI" -->
                            <text x="20" y="38" font-family="Inter" font-weight="800" font-size="24" fill="#38BDF8" text-anchor="middle">AI</text>
                            <!-- Connection line down -->
                            <path d="M20 70V160" stroke="#38BDF8" stroke-width="1.5" stroke-dasharray="4 4"/>
                        </g>

                        <!-- Government Building (Background Right) -->
                        <g transform="translate(600, 200)">
                            <!-- Dome -->
                            <path d="M-80 150C-80 80 80 80 80 150H-80Z" fill="#F1F5F9" stroke="#CBD5E1" stroke-width="2"/>
                            <path d="M-60 150C-60 100 60 100 60 150H-60Z" fill="#E2E8F0"/>
                            <!-- Pillars -->
                            <rect x="-90" y="150" width="180" height="20" fill="#CBD5E1" stroke="#94A3B8" stroke-width="2"/>
                            <rect x="-80" y="170" width="15" height="150" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                            <rect x="-40" y="170" width="15" height="150" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                            <rect x="0" y="170" width="15" height="150" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                            <rect x="40" y="170" width="15" height="150" fill="#F8FAFC" stroke="#CBD5E1" stroke-width="2"/>
                            <rect x="-100" y="320" width="200" height="30" fill="#CBD5E1" stroke="#94A3B8" stroke-width="2"/>
                            <!-- Flag -->
                            <line x1="0" y1="80" x2="0" y2="40" stroke="#94A3B8" stroke-width="3"/>
                            <rect x="0" y="40" width="30" height="10" fill="#F97316"/>
                            <rect x="0" y="50" width="30" height="10" fill="#FFFFFF"/>
                            <rect x="0" y="60" width="30" height="10" fill="#15803D"/>
                            <circle cx="15" cy="55" r="3" fill="#1E3A8A"/>
                        </g>

                        <!-- Shield with Scales of Justice (Center Back) -->
                        <g transform="translate(500, 260)" class="animate-float" style="animation-delay: 1s;">
                            <!-- Shield Base -->
                            <path d="M0 -70L-60 -50V10C-60 60 -20 100 0 110C20 100 60 60 60 10V-50L0 -70Z" fill="#1E3A8A" stroke="#38BDF8" stroke-width="3" filter="drop-shadow(0px 10px 20px rgba(37,99,235,0.4))"/>
                            <!-- Scales inside -->
                            <path d="M0 -30V40 M-20 40H20" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                            <path d="M-30 -10H30" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round"/>
                            <path d="M-30 -10L-40 20H-20L-30 -10Z" fill="none" stroke="#FFFFFF" stroke-width="1.5"/>
                            <path d="M30 -10L20 20H40L30 -10Z" fill="none" stroke="#FFFFFF" stroke-width="1.5"/>
                        </g>

                        <!-- Legal Document Floating (Bottom Right) -->
                        <g transform="translate(620, 360) rotate(-10)" class="animate-float" style="animation-delay: 1.5s;">
                            <rect x="0" y="0" width="120" height="160" rx="8" fill="white" stroke="#E2E8F0" stroke-width="2" filter="drop-shadow(0px 15px 25px rgba(0,0,0,0.1))"/>
                            <!-- Text Lines -->
                            <rect x="20" y="30" width="80" height="8" rx="4" fill="#CBD5E1"/>
                            <rect x="20" y="50" width="60" height="8" rx="4" fill="#CBD5E1"/>
                            <rect x="20" y="70" width="70" height="8" rx="4" fill="#CBD5E1"/>
                            <!-- PDF Badge -->
                            <rect x="20" y="110" width="40" height="30" rx="6" fill="#2563EB"/>
                            <text x="40" y="130" font-family="Inter" font-weight="700" font-size="12" fill="white" text-anchor="middle">PDF</text>
                            <text x="20" y="15" font-family="Inter" font-weight="700" font-size="10" fill="#0F172A">LEGAL DOCUMENT</text>
                        </g>

                        <!-- Police Officer (Foreground Center-Left) -->
                        <g transform="translate(300, 500)">
                            <!-- Tablet glow -->
                            <path d="M80 -180L150 -200L170 -120L100 -100Z" fill="#38BDF8" opacity="0.3" filter="blur(10px)"/>
                            <!-- Tablet in hand -->
                            <path d="M90 -160L140 -180L150 -130L100 -110Z" fill="#0F172A" stroke="#E2E8F0" stroke-width="2"/>
                            <path d="M95 -155L135 -172L142 -135L102 -118Z" fill="#38BDF8" opacity="0.8"/> <!-- Screen -->
                            
                            <!-- Body (Back View) -->
                            <path d="M-80 0C-80 -100 -50 -180 0 -200C50 -180 80 -100 80 0" fill="#1E3A8A" stroke="#0F172A" stroke-width="4"/> <!-- Torso -->
                            <!-- Belt -->
                            <rect x="-80" y="-30" width="160" height="30" fill="#0F172A"/>
                            <rect x="-15" y="-35" width="30" height="40" fill="#CBD5E1" rx="4"/>
                            <!-- Shoulder Pads -->
                            <path d="M-80 -180C-100 -170 -110 -150 -110 -130C-110 -100 -80 -70 -80 0" fill="#1E3A8A" stroke="#0F172A" stroke-width="4"/> <!-- Left Arm -->
                            <path d="M80 -180C100 -170 110 -150 110 -130C110 -100 80 -70 80 0" fill="#1E3A8A" stroke="#0F172A" stroke-width="4"/> <!-- Right Arm -->
                            
                            <!-- Head and Hat -->
                            <path d="M-30 -200C-30 -250 30 -250 30 -200" fill="#FCA5A5"/> <!-- Neck/Back of head -->
                            <path d="M-40 -230C-50 -240 -20 -280 0 -280C20 -280 50 -240 40 -230" fill="#0F172A"/> <!-- Hat Base -->
                            <path d="M-50 -230Q0 -210 50 -230" fill="#1E3A8A" stroke="#0F172A" stroke-width="2"/> <!-- Hat Brim -->

                            <!-- POLICE Patch on Back -->
                            <g transform="translate(0, -120)">
                                <rect x="-40" y="-15" width="80" height="30" fill="#0F172A" rx="4"/>
                                <text x="0" y="6" font-family="Inter" font-weight="800" font-size="18" fill="#F8FAFC" text-anchor="middle" letter-spacing="2">POLICE</text>
                            </g>
                        </g>

                    </svg>
                </div>
            </div>

        </div>
    </div>
</section>

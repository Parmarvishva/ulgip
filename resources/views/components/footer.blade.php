<footer class="bg-[#0F172A] text-slate-300 pt-16 pb-8 border-t border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12 mb-16">
            
            <!-- Brand Column -->
            <div class="lg:col-span-1 flex flex-col items-start">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 text-white">
                        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <path d="M50 5L15 20V45C15 68 30 88 50 95C70 88 85 68 85 45V20L50 5Z" fill="#1E3A8A" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M50 12L22 24V45C22 64 34 80 50 86C66 80 78 64 78 45V24L50 12Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                            <path d="M50 25V65 M35 65H65 M50 25L50 20" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M30 35H70" stroke="#FFFFFF" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M30 35L20 55H40L30 35Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                            <path d="M70 35L60 55H80L70 35Z" stroke="#FFFFFF" stroke-width="1.5" fill="none"/>
                        </svg>
                    </div>
                    <span class="text-sm font-bold text-white leading-tight">Unified Legal & Government<br>Intelligence Platform</span>
                </a>
                <p class="text-xs text-slate-400 mb-8 leading-relaxed">
                    {{ __('Empowering Law Enforcement with Intelligence, Technology and Trust.') }}
                </p>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-white transition-colors">
                        <i data-lucide="facebook" class="w-4 h-4"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-white transition-colors">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                    </a>
                    <a href="#" class="w-8 h-8 rounded-full border border-slate-700 flex items-center justify-center text-slate-400 hover:text-white hover:border-white transition-colors">
                        <i data-lucide="youtube" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-6 text-sm">{{ __('Quick Links') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('home') }}#features" class="text-slate-400 hover:text-white transition-colors">{{ __('Features') }}</a></li>
                    <li><a href="{{ route('ai.assistant') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('AI Assistant') }}</a></li>
                    <li><a href="{{ route('resources') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Resources') }}</a></li>
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('About Us') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Contact') }}</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="text-white font-semibold mb-6 text-sm">{{ __('Resources') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('legal.library') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Legal Documents') }}</a></li>
                    <li><a href="{{ route('circulars') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Government Circulars') }}</a></li>
                    <li><a href="{{ route('legal.library') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('SOP Library') }}</a></li>
                    <li><a href="{{ route('legal.library') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Acts & Rules') }}</a></li>
                    <li><a href="{{ route('search') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Case Laws') }}</a></li>
                </ul>
            </div>

            <!-- {{ __('Support') }} -->
            <div>
                <h4 class="text-white font-semibold mb-6 text-sm">{{ __('Support') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Help Center') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('FAQs') }}</a></li>
                    <li><a href="{{ route('resources') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('User Guide') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Contact Support') }}</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-white transition-colors">{{ __('Feedback') }}</a></li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div>
                <h4 class="text-white font-semibold mb-6 text-sm">{{ __('Contact Us') }}</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3 text-slate-400">
                        <i data-lucide="map-pin" class="w-5 h-5 flex-shrink-0 mt-0.5"></i>
                        <span>{{ __('Ministry of Home Affairs') }}<br>{{ __('Government of India') }}</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="mail" class="w-5 h-5 flex-shrink-0"></i>
                        <span>support@ulgi.gov.in</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-400">
                        <i data-lucide="phone" class="w-5 h-5 flex-shrink-0"></i>
                        <span>+91 11 1234 5678</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[11px] text-slate-500">
            <div>
                &copy; 2026 {{ __('Unified Legal & Government Intelligence Platform') }}. {{ __('All rights reserved.') }}
            </div>
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-slate-300 transition-colors">{{ __('Privacy Policy') }}</a>
                <span class="text-slate-700">|</span>
                <a href="#" class="hover:text-slate-300 transition-colors">{{ __('Terms of Service') }}</a>
                <span class="text-slate-700">|</span>
                <a href="#" class="hover:text-slate-300 transition-colors">{{ __('Accessibility') }}</a>
            </div>
        </div>

    </div>
</footer>

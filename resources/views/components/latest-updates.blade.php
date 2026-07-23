<section class="py-20 bg-white dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400">{{ __('Latest Updates') }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 divide-y md:divide-y-0 md:divide-x divide-border dark:divide-slate-800">
            
            <!-- Column 1: Latest Circulars -->
            <div class="md:pr-8 lg:pr-12 pt-8 md:pt-0 first:pt-0">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-bold text-primary dark:text-white">{{ __('Latest Circulars') }}</h3>
                    <a href="{{ route('circulars') }}" class="text-sm font-semibold text-accent flex items-center gap-1 hover:text-gov-blue transition-colors group">
                        {{ __('View All') }} <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center flex-shrink-0 mt-1 border border-red-100 dark:border-red-900/30">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                            <span class="absolute text-[8px] font-bold mt-3">PDF</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Cyber Crime Reporting Guidelines 2024') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 20, 2024</p>
                        </div>
                    </a>
                    <!-- Item 2 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center flex-shrink-0 mt-1 border border-red-100 dark:border-red-900/30">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                            <span class="absolute text-[8px] font-bold mt-3">PDF</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Digital Arrest Prevention Advisory') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 18, 2024</p>
                        </div>
                    </a>
                    <!-- Item 3 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center flex-shrink-0 mt-1 border border-red-100 dark:border-red-900/30">
                            <i data-lucide="file-text" class="w-5 h-5"></i>
                            <span class="absolute text-[8px] font-bold mt-3">PDF</span>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Social Media Monitoring Protocol') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 15, 2024</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Column 2: Legal Updates -->
            <div class="md:px-8 lg:px-12 pt-8 md:pt-0">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-bold text-primary dark:text-white">{{ __('Legal Updates') }}</h3>
                    <a href="{{ route('legal.library') }}" class="text-sm font-semibold text-accent flex items-center gap-1 hover:text-gov-blue transition-colors group">
                        {{ __('View All') }} <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center flex-shrink-0 mt-1 border border-purple-100 dark:border-purple-900/30">
                            <i data-lucide="book-open" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('BNS Section 318 - Updated Guidelines') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 19, 2024</p>
                        </div>
                    </a>
                    <!-- Item 2 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center flex-shrink-0 mt-1 border border-purple-100 dark:border-purple-900/30">
                            <i data-lucide="book-open" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('IT Act Amendment 2024 Summary') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 17, 2024</p>
                        </div>
                    </a>
                    <!-- Item 3 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center flex-shrink-0 mt-1 border border-purple-100 dark:border-purple-900/30">
                            <i data-lucide="book-open" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('New Rules for Electronic Evidence') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 14, 2024</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Column 3: Cyber Security Alerts -->
            <div class="md:pl-8 lg:pl-12 pt-8 md:pt-0">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="font-bold text-primary dark:text-white">{{ __('Cyber Security Alerts') }}</h3>
                    <a href="{{ route('cyber.alerts') }}" class="text-sm font-semibold text-accent flex items-center gap-1 hover:text-gov-blue transition-colors group">
                        {{ __('View All') }} <i data-lucide="arrow-right" class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
                
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-orange-50 dark:bg-orange-900/20 text-orange-500 flex items-center justify-center flex-shrink-0 mt-1 border border-orange-100 dark:border-orange-900/30">
                            <i data-lucide="shield-alert" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Phishing Attack Alert') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 21, 2024</p>
                        </div>
                    </a>
                    <!-- Item 2 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-orange-50 dark:bg-orange-900/20 text-orange-500 flex items-center justify-center flex-shrink-0 mt-1 border border-orange-100 dark:border-orange-900/30">
                            <i data-lucide="shield-alert" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Fake Banking Apps Advisory') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 20, 2024</p>
                        </div>
                    </a>
                    <!-- Item 3 -->
                    <a href="#" class="group flex gap-4 items-start">
                        <div class="w-10 h-10 rounded bg-orange-50 dark:bg-orange-900/20 text-orange-500 flex items-center justify-center flex-shrink-0 mt-1 border border-orange-100 dark:border-orange-900/30">
                            <i data-lucide="shield-alert" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary dark:text-slate-200 group-hover:text-accent transition-colors leading-snug mb-1">{{ __('Malware Distribution Warning') }}</h4>
                            <p class="text-xs text-text-muted dark:text-slate-500">May 19, 2024</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

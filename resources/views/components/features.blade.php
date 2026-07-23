<section id="features" class="py-20 bg-white dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400">{{ __('Powerful Features') }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <a href="{{ route('legal.library') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-accent flex items-center justify-center mb-6">
                    <i data-lucide="file-text" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('Legal Documents') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Smart repository for acts, rules, laws and legal references.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="{{ route('ai.assistant') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 dark:text-purple-400 flex items-center justify-center mb-6">
                    <i data-lucide="cpu" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('AI Legal Assistant') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Get AI-powered legal guidance and document support instantly.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="{{ route('search') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-green-50 dark:bg-green-900/20 text-success flex items-center justify-center mb-6">
                    <i data-lucide="search" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('Smart Search') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Find any law, circular, SOP or document in seconds.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="{{ route('circulars') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-900/20 text-orange-500 flex items-center justify-center mb-6">
                    <i data-lucide="megaphone" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('Government Circulars') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Latest government notifications in one place.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- Card 5 -->
            <a href="{{ route('dashboard') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-accent flex items-center justify-center mb-6">
                    <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('Analytics Dashboard') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Visual insights and reports for better decision making.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

            <!-- Card 6 -->
            <a href="{{ route('login') }}" class="group bg-white dark:bg-slate-900 rounded-2xl p-8 border border-border dark:border-slate-800 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.15)] dark:hover:shadow-[0_8px_30px_-10px_rgba(37,99,235,0.2)] hover:border-blue-200 dark:hover:border-blue-800 transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                <div class="w-12 h-12 rounded-xl bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center mb-6">
                    <i data-lucide="shield" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-primary dark:text-white mb-3">{{ __('Secure Access') }}</h3>
                <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed mb-8 flex-grow">
                    {{ __('Role-based secure authentication and authorization.') }}
                </p>
                <div class="mt-auto flex justify-end">
                    <i data-lucide="arrow-right" class="w-5 h-5 text-accent transform group-hover:translate-x-1 transition-transform"></i>
                </div>
            </a>

        </div>
    </div>
</section>

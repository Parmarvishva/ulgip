<section id="ai-assistant" class="py-24 relative bg-primary text-white overflow-hidden">
    <!-- Dark Theme Background Elements -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9IiMzMzQxNTUiLz48L3N2Zz4=')] opacity-20"></div>
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-gov-blue/20 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- AI Details -->
            <div>
                <h2 class="text-sm font-bold text-accent uppercase tracking-widest mb-3">{{ __('Gov-AI Assistant') }}</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold mb-6">{{ __('Your Co-pilot for Legal & Cyber Investigations') }}</h3>
                <p class="text-lg text-slate-300 mb-8 leading-relaxed">
                    {{ __('Interact with our specially trained LLM designed exclusively for government and law enforcement. Ask complex legal questions, generate warrants, or summarize gigabytes of case files in seconds.') }}
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-success flex-shrink-0 mt-0.5"></i>
                        <span class="text-slate-300">{{ __('Trained on the latest Penal Codes, Cyber Laws, and precedents.') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-success flex-shrink-0 mt-0.5"></i>
                        <span class="text-slate-300">{{ __('Generates ready-to-file legal documents and FIR templates.') }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="check-circle-2" class="w-6 h-6 text-success flex-shrink-0 mt-0.5"></i>
                        <span class="text-slate-300">{{ __('100% Air-gapped capable, ensuring no data leaks.') }}</span>
                    </li>
                </ul>

                <a href="#" class="inline-flex justify-center items-center gap-2 px-6 py-3 rounded-xl bg-white text-primary hover:bg-slate-100 font-semibold transition-colors">
                    {{ __('Explore AI Capabilities') }}
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </a>
            </div>

            <!-- ChatGPT Style UI Preview -->
            <div class="relative w-full max-w-lg mx-auto lg:mx-0">
                <div class="absolute -inset-1 bg-gradient-to-r from-accent to-success rounded-2xl blur opacity-30 animate-pulse-slow"></div>
                
                <div class="relative bg-slate-900 border border-slate-700 rounded-2xl overflow-hidden shadow-2xl flex flex-col h-[500px]">
                    <!-- Window Header -->
                    <div class="bg-slate-800 border-b border-slate-700 px-4 py-3 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-accent/20 flex items-center justify-center">
                                <i data-lucide="bot" class="w-5 h-5 text-accent"></i>
                            </div>
                            <div>
                                <div class="text-sm font-bold text-white leading-tight">{{ __('ULGIP Assistant') }}</div>
                                <div class="text-xs text-success flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-success"></span> {{ __('Online') }}
                                </div>
                            </div>
                        </div>
                        <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-400"></i>
                    </div>

                    <!-- Chat Area -->
                    <div class="flex-grow p-4 overflow-y-auto space-y-6 scrollbar-hide">
                        <!-- User Message -->
                        <div class="flex justify-end">
                            <div class="bg-gov-blue text-white px-4 py-2.5 rounded-2xl rounded-tr-sm max-w-[85%] text-sm">
                                {{ __('Summarize the latest amendments to the IT Act regarding deepfakes.') }}
                            </div>
                        </div>
                        
                        <!-- AI Response -->
                        <div class="flex justify-start">
                            <div class="bg-slate-800 border border-slate-700 text-slate-200 px-4 py-3 rounded-2xl rounded-tl-sm max-w-[90%] text-sm shadow-sm space-y-3">
                                <p>{{ __('Based on the recent circular from the Ministry of Electronics & IT:') }}</p>
                                <ul class="list-disc pl-4 space-y-1 text-slate-300">
                                    <li>{{ __('Platforms must remove deepfake content within 24 hours of reporting.') }}</li>
                                    <li>{{ __('Creation of malicious deepfakes now attracts penalties under Section 66D.') }}</li>
                                </ul>
                                <div class="bg-slate-900 border border-slate-700 rounded p-2 flex items-center justify-between mt-2">
                                    <div class="flex items-center gap-2 text-xs text-slate-400">
                                        <i data-lucide="file-text" class="w-4 h-4"></i>
                                        MeitY_Circular_2026.pdf
                                    </div>
                                    <button class="text-accent hover:text-white transition-colors">
                                        <i data-lucide="download" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- User Message 2 -->
                        <div class="flex justify-end">
                            <div class="bg-gov-blue text-white px-4 py-2.5 rounded-2xl rounded-tr-sm max-w-[85%] text-sm">
                                {{ __('Generate a take-down notice template based on this.') }}
                            </div>
                        </div>

                        <!-- AI Typing Indicator -->
                        <div class="flex justify-start">
                            <div class="bg-slate-800 border border-slate-700 px-4 py-3 rounded-2xl rounded-tl-sm shadow-sm flex items-center gap-1.5">
                                <span class="w-2 h-2 bg-slate-500 rounded-full animate-bounce" style="animation-delay: 0s"></span>
                                <span class="w-2 h-2 bg-slate-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                                <span class="w-2 h-2 bg-slate-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Input Area -->
                    <div class="p-4 bg-slate-800/50 border-t border-slate-700">
                        <div class="relative">
                            <input type="text" placeholder="{{ __('Ask ULGIP Assistant...') }}" class="w-full bg-slate-900 border border-slate-600 rounded-xl pl-4 pr-12 py-3 text-sm text-white placeholder-slate-400 focus:outline-none focus:border-accent focus:ring-1 focus:ring-accent transition-all" disabled>
                            <button class="absolute right-2 top-1/2 transform -translate-y-1/2 p-1.5 bg-accent hover:bg-gov-blue rounded-lg text-white transition-colors">
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="text-center mt-2 text-[10px] text-slate-500">
                            {{ __('ULGIP AI can make mistakes. Verify critical legal information.') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

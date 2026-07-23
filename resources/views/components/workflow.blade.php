<section class="py-20 bg-background dark:bg-[#020617] border-y border-border/50 dark:border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-12 items-start">
            
            <!-- Left Side: How It Works -->
            <div>
                <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400 mb-12 text-center lg:text-left">How It Works</h2>
                
                <div class="relative flex justify-between items-start max-w-lg mx-auto lg:mx-0">
                    <!-- Connecting Dotted Line -->
                    <div class="absolute top-8 left-[10%] right-[10%] h-0.5 border-t-2 border-dashed border-blue-200 dark:border-blue-900 z-0 hidden sm:block"></div>
                    
                    <!-- Step 1 -->
                    <div class="relative z-10 flex flex-col items-center w-1/4 text-center">
                        <div class="w-16 h-16 rounded-full bg-accent text-white flex items-center justify-center mb-4 shadow-lg shadow-accent/20 border-4 border-white dark:border-[#020617]">
                            <i data-lucide="user" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-sm font-bold text-primary dark:text-white mb-2">Step 1<br>Login</h4>
                        <p class="text-[11px] text-text-muted dark:text-slate-400 px-1 leading-tight">Secure login with your official credentials.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative z-10 flex flex-col items-center w-1/4 text-center">
                        <div class="w-16 h-16 rounded-full bg-accent text-white flex items-center justify-center mb-4 shadow-lg shadow-accent/20 border-4 border-white dark:border-[#020617]">
                            <i data-lucide="search" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-sm font-bold text-primary dark:text-white mb-2">Step 2<br>Search</h4>
                        <p class="text-[11px] text-text-muted dark:text-slate-400 px-1 leading-tight">Search laws, circulars, SOPs or documents instantly.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative z-10 flex flex-col items-center w-1/4 text-center">
                        <div class="w-16 h-16 rounded-full bg-accent text-white flex items-center justify-center mb-4 shadow-lg shadow-accent/20 border-4 border-white dark:border-[#020617]">
                            <i data-lucide="cpu" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-sm font-bold text-primary dark:text-white mb-2">Step 3<br>AI Guidance</h4>
                        <p class="text-[11px] text-text-muted dark:text-slate-400 px-1 leading-tight">Get AI-powered legal guidance and recommendations.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative z-10 flex flex-col items-center w-1/4 text-center">
                        <div class="w-16 h-16 rounded-full bg-accent text-white flex items-center justify-center mb-4 shadow-lg shadow-accent/20 border-4 border-white dark:border-[#020617]">
                            <i data-lucide="download" class="w-7 h-7"></i>
                        </div>
                        <h4 class="text-sm font-bold text-primary dark:text-white mb-2">Step 4<br>Download</h4>
                        <p class="text-[11px] text-text-muted dark:text-slate-400 px-1 leading-tight">Download required documents and stay informed.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: AI Assistant Preview -->
            <div>
                <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400 mb-8 text-center lg:text-left">AI Assistant Preview</h2>
                
                <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 shadow-[0_10px_30px_-15px_rgba(0,0,0,0.1)] dark:shadow-[0_10px_30px_-15px_rgba(37,99,235,0.1)] p-6">
                    
                    <!-- Chat History -->
                    <div class="space-y-6 mb-6">
                        <!-- User Message -->
                        <div class="flex flex-col items-end">
                            <div class="bg-accent text-white rounded-2xl rounded-tr-none px-5 py-3 max-w-[85%] text-sm shadow-sm">
                                <div class="text-[10px] text-blue-200 mb-1">You</div>
                                Which law applies to online banking fraud?
                            </div>
                            <span class="text-[10px] text-slate-400 mt-1 mr-1">10:30 AM</span>
                        </div>

                        <!-- AI Message -->
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center flex-shrink-0 border border-slate-200 dark:border-slate-700">
                                <i data-lucide="bot" class="w-4 h-4 text-primary dark:text-white"></i>
                            </div>
                            <div class="flex flex-col items-start w-full">
                                <div class="bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 text-primary dark:text-slate-200 rounded-2xl rounded-tl-none px-5 py-4 w-full text-sm shadow-sm">
                                    <div class="font-semibold text-xs text-gov-blue dark:text-blue-400 mb-2">AI Assistant</div>
                                    <p class="mb-3">The following legal provisions may apply:</p>
                                    <ul class="list-disc pl-4 mb-4 space-y-1 text-slate-600 dark:text-slate-300">
                                        <li>IT Act, 2000 - Section 66C (Identity Theft)</li>
                                        <li>IT Act, 2000 - Section 66D (Cheating by Personation)</li>
                                        <li>IPC Section 420 (Cheating)</li>
                                        <li>RBI Circular on Digital Payment Security</li>
                                    </ul>
                                    <p class="font-medium text-slate-700 dark:text-slate-200">Would you like to view related circulars or case laws?</p>
                                </div>
                                <span class="text-[10px] text-slate-400 mt-1 ml-1">10:31 AM</span>
                                
                                <!-- Action Buttons -->
                                <div class="flex flex-wrap gap-2 mt-3">
                                    <button class="px-4 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">View Circulars</button>
                                    <button class="px-4 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">View Case Laws</button>
                                    <button class="px-4 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">Download SOP</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="relative flex items-center bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-700 rounded-full px-4 py-2 shadow-sm">
                        <input type="text" placeholder="Ask anything..." class="w-full bg-transparent border-none focus:ring-0 text-sm py-1.5 text-primary dark:text-white placeholder-slate-400">
                        <div class="flex items-center gap-2 ml-2">
                            <button class="text-slate-400 hover:text-accent transition-colors p-1.5">
                                <i data-lucide="paperclip" class="w-4 h-4"></i>
                            </button>
                            <button class="bg-accent text-white rounded-full p-2 hover:bg-blue-700 transition-colors shadow-sm">
                                <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

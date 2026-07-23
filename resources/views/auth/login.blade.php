<x-layout>
    <div class="min-h-[calc(100vh-160px)] flex items-center justify-center pt-10 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-slate-900 border border-border dark:border-slate-800 p-10 rounded-3xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)]">
            <div>
                <div class="mx-auto w-14 h-14 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-accent">
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-primary dark:text-white tracking-tight">
                    Secure Login
                </h2>
                <p class="mt-2 text-center text-sm text-text-muted dark:text-slate-400">
                    National Cyber Coordination Centre (NCCC)
                </p>
            </div>
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-success text-center bg-green-50 p-3 rounded-xl border border-green-100">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="space-y-5">
                    <div>
                        <label for="email" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Official Email ID</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="email" name="email" type="email" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3.5 focus:ring-2 focus:ring-accent focus:border-accent transition-shadow text-sm" placeholder="officer@agency.gov.in" value="{{ old('email') }}">
                        </div>
                        @error('email')<p class="mt-2 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="lock" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="password" name="password" type="password" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3.5 focus:ring-2 focus:ring-accent focus:border-accent transition-shadow text-sm" placeholder="••••••••">
                        </div>
                        @error('password')<p class="mt-2 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-accent border-slate-300 rounded focus:ring-accent">
                        <label for="remember_me" class="ml-2 block text-sm text-slate-600 dark:text-slate-400">
                            Remember me
                        </label>
                    </div>
                    <div class="text-sm font-medium">
                        <a href="{{ route('password.request') }}" class="text-accent hover:text-blue-700 transition-colors">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-accent hover:bg-blue-700 shadow-md shadow-accent/20 transition-all duration-300 transform hover:-translate-y-0.5">
                        <i data-lucide="log-in" class="h-5 w-5"></i>
                        Authenticate & Enter
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center text-sm text-slate-600 dark:text-slate-400">
                Are you a designated Nodal Officer? <a href="{{ route('register') }}" class="font-bold text-accent hover:text-blue-700 transition-colors">Register Agency</a>
            </div>
        </div>
    </div>
</x-layout>

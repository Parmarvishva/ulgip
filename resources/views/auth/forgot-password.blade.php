<x-layout>
    <div class="min-h-screen flex items-center justify-center pt-24 pb-12 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-md w-full space-y-8 glass-panel dark:bg-slate-900/80 border border-border dark:border-slate-800 p-10 rounded-3xl relative z-10 shadow-2xl">
            <div>
                <div class="mx-auto w-16 h-16 bg-gov-blue/10 dark:bg-gov-blue/20 rounded-full flex items-center justify-center text-gov-blue">
                    <i data-lucide="key" class="w-8 h-8"></i>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-primary dark:text-white">
                    Password Reset
                </h2>
                <p class="mt-2 text-center text-sm text-text-muted dark:text-slate-400">
                    Forgot your password? No problem. Enter your official email address and we will securely transmit a password reset link.
                </p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-success text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-primary dark:text-slate-300">Official Email ID</label>
                    <div class="mt-1 relative rounded-xl shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i data-lucide="mail" class="h-5 w-5 text-text-muted dark:text-slate-500"></i>
                        </div>
                        <input id="email" name="email" type="email" required class="focus:ring-gov-blue focus:border-gov-blue block w-full pl-10 sm:text-sm border-border dark:border-slate-700 bg-white dark:bg-slate-950 text-primary dark:text-white rounded-xl py-3" placeholder="officer@agency.gov.in" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gov-blue hover:bg-accent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gov-blue shadow-lg shadow-gov-blue/30 transition-all duration-300 transform hover:-translate-y-0.5">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i data-lucide="send" class="h-5 w-5 text-white/50 group-hover:text-white/80 transition-colors"></i>
                        </span>
                        Transmit Reset Link
                    </button>
                </div>
                
                <div class="mt-4 text-center">
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gov-blue hover:text-accent dark:hover:text-white transition-colors">
                        Return to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layout>

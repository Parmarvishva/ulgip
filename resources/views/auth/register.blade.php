<x-layout>
    <div class="min-h-[calc(100vh-160px)] flex items-center justify-center pt-10 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white dark:bg-slate-900 border border-border dark:border-slate-800 p-10 rounded-3xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)]">
            <div>
                <div class="mx-auto w-14 h-14 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-accent">
                    <i data-lucide="building-2" class="w-7 h-7"></i>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-primary dark:text-white tracking-tight">
                    Agency Registration
                </h2>
                <p class="mt-2 text-center text-sm text-text-muted dark:text-slate-400">
                    Request access to the ULGIP Intelligence Network
                </p>
            </div>

            <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-1">Nodal Officer Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="user" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="name" name="name" type="text" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm" placeholder="Inspector General XYZ" value="{{ old('name') }}">
                        </div>
                        @error('name')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-1">Official Govt Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="email" name="email" type="email" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm" placeholder="officer@agency.gov.in" value="{{ old('email') }}">
                        </div>
                        @error('email')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-1">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="lock" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="password" name="password" type="password" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm" placeholder="••••••••">
                        </div>
                        @error('password')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-1">Confirm Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="shield" class="h-5 w-5 text-slate-400"></i>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required class="block w-full pl-11 bg-slate-50 border border-slate-200 text-primary rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm" placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center items-center gap-2 py-3.5 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-accent hover:bg-blue-700 shadow-md shadow-accent/20 transition-all duration-300 transform hover:-translate-y-0.5">
                        <i data-lucide="user-plus" class="h-5 w-5"></i>
                        Submit Registration
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center text-sm text-slate-600 dark:text-slate-400">
                Already registered? <a href="{{ route('login') }}" class="font-bold text-accent hover:text-blue-700 transition-colors">Login here</a>
            </div>
        </div>
    </div>
</x-layout>

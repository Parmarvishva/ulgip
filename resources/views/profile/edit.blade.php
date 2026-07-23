<x-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h1 class="text-3xl font-extrabold text-primary dark:text-white">Profile Settings</h1>
                <p class="text-text-muted dark:text-slate-400 mt-1">Manage your nodal officer account</p>
            </div>
            <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-xl bg-white dark:bg-slate-800 border border-border dark:border-slate-700 text-sm font-medium hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors shadow-sm flex items-center gap-2">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Dashboard
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-1">
                <div class="glass-panel p-6 rounded-2xl border border-border dark:border-slate-800 shadow-sm text-center">
                    <div class="w-24 h-24 mx-auto rounded-full bg-gov-blue text-white flex items-center justify-center text-3xl font-bold mb-4 shadow-lg shadow-gov-blue/30">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    <h3 class="text-lg font-bold text-primary dark:text-white">{{ Auth::user()->name }}</h3>
                    <p class="text-sm text-text-muted dark:text-slate-400 mb-4">{{ Auth::user()->email }}</p>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-success/10 border border-success/20 text-success text-xs font-semibold uppercase tracking-wider">
                        <i data-lucide="shield-check" class="w-3 h-3"></i>
                        Verified Nodal
                    </span>
                </div>
            </div>

            <div class="md:col-span-2 space-y-8">
                <!-- Update Profile Information Form (Simplified placeholder for hackathon UI) -->
                <div class="glass-panel p-8 rounded-3xl border border-border dark:border-slate-800 shadow-sm">
                    <h3 class="text-lg font-bold text-primary dark:text-white mb-6 border-b border-border dark:border-slate-800 pb-4">Personal Information</h3>
                    
                    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <label for="name" class="block text-sm font-medium text-primary dark:text-slate-300">Name</label>
                            <input id="name" name="name" type="text" class="mt-1 focus:ring-gov-blue focus:border-gov-blue block w-full sm:text-sm border-border dark:border-slate-700 bg-white dark:bg-slate-950 text-primary dark:text-white rounded-xl py-2 px-3" value="{{ old('name', Auth::user()->name) }}" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-primary dark:text-slate-300">Email</label>
                            <input id="email" name="email" type="email" class="mt-1 focus:ring-gov-blue focus:border-gov-blue block w-full sm:text-sm border-border dark:border-slate-700 bg-white dark:bg-slate-950 text-primary dark:text-white rounded-xl py-2 px-3" value="{{ old('email', Auth::user()->email) }}" required>
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="px-5 py-2.5 rounded-xl bg-gov-blue hover:bg-accent text-white text-sm font-medium transition-all duration-300 shadow-lg shadow-gov-blue/30">
                                Save Changes
                            </button>
                            @if (session('status') === 'profile-updated')
                                <p class="text-sm text-success transition-all" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">Saved.</p>
                            @endif
                        </div>
                    </form>
                </div>

                <!-- Update Password (Simplified) -->
                <div class="glass-panel p-8 rounded-3xl border border-border dark:border-slate-800 shadow-sm">
                    <h3 class="text-lg font-bold text-primary dark:text-white mb-6 border-b border-border dark:border-slate-800 pb-4">Update Password</h3>
                    <p class="text-sm text-text-muted dark:text-slate-400 mb-6">Ensure your account is using a long, random password to stay secure.</p>
                    
                    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <label for="current_password" class="block text-sm font-medium text-primary dark:text-slate-300">Current Password</label>
                            <input id="current_password" name="current_password" type="password" class="mt-1 focus:ring-gov-blue focus:border-gov-blue block w-full sm:text-sm border-border dark:border-slate-700 bg-white dark:bg-slate-950 text-primary dark:text-white rounded-xl py-2 px-3">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-primary dark:text-slate-300">New Password</label>
                            <input id="password" name="password" type="password" class="mt-1 focus:ring-gov-blue focus:border-gov-blue block w-full sm:text-sm border-border dark:border-slate-700 bg-white dark:bg-slate-950 text-primary dark:text-white rounded-xl py-2 px-3">
                        </div>

                        <div class="flex items-center gap-4">
                            <button type="submit" class="px-5 py-2.5 rounded-xl bg-primary hover:bg-gov-blue dark:bg-white dark:text-primary dark:hover:bg-slate-200 text-white text-sm font-medium transition-all duration-300">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="min-h-screen flex items-center justify-center pt-24 pb-12 px-4 sm:px-6 lg:px-8 relative">
        <div class="max-w-md w-full space-y-8 glass-panel dark:bg-slate-900/80 border border-border dark:border-slate-800 p-10 rounded-3xl relative z-10 shadow-2xl">
            <div>
                <div class="mx-auto w-16 h-16 bg-success/10 dark:bg-success/20 rounded-full flex items-center justify-center text-success">
                    <i data-lucide="mail-check" class="w-8 h-8"></i>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-primary dark:text-white">
                    Verify Official Email
                </h2>
                <p class="mt-4 text-center text-sm text-text-muted dark:text-slate-400">
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-success text-center bg-success/10 p-3 rounded-lg border border-success/20">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-gov-blue hover:bg-accent text-white text-sm font-medium transition-all duration-300 shadow-lg shadow-gov-blue/30">
                        Resend Verification Email
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-text-muted dark:text-slate-400 hover:text-red-500 transition-colors">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

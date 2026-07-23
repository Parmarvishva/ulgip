<x-layout>
{{-- Hero --}}
<section class="relative py-20 bg-gradient-to-br from-[#0F172A] via-[#1E3A8A] to-[#0F172A] text-white overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 text-sm font-semibold mb-6">
            <i data-lucide="phone-call" class="w-4 h-4"></i> Get In Touch
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Contact Us</h1>
        <p class="text-blue-100 max-w-2xl mx-auto">Reach out to our support team for assistance, feedback, or partnership enquiries.</p>
    </div>
</section>

{{-- Main Content --}}
<section class="py-20 bg-white dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

            {{-- Contact Info Sidebar --}}
            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-extrabold text-primary dark:text-white mb-2">Contact Information</h2>
                    <p class="text-text-muted dark:text-slate-400 text-sm leading-relaxed">Our dedicated support team is available to assist law enforcement officers and government departments.</p>
                </div>

                @foreach([
                    ['icon'=>'map-pin','color'=>'blue','label'=>'Address','lines'=>['Ministry of Home Affairs','North Block, Central Secretariat','New Delhi - 110001']],
                    ['icon'=>'mail','color'=>'green','label'=>'Email','lines'=>['support@ulgi.gov.in','nodal@ulgi.gov.in']],
['icon'=>'phone','color'=>'purple','label'=>'Phone','lines'=>['+91 11 1234 5678 (General)','+91 11 1234 5679 (Emergency)']],                    ['icon'=>'clock','color'=>'orange','label'=>'Office Hours','lines'=>['Monday – Friday: 9:00 AM – 6:00 PM','Cyber Emergency: 24 × 7']],
                ] as $info)
                <div class="flex gap-4 p-5 rounded-2xl border border-border dark:border-slate-800 bg-slate-50 dark:bg-slate-900">
                    <div class="w-11 h-11 rounded-xl bg-{{ $info['color'] }}-50 dark:bg-{{ $info['color'] }}-900/20 text-{{ $info['color'] }}-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="{{ $info['icon'] }}" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <div class="text-xs font-semibold text-text-muted dark:text-slate-500 uppercase tracking-wider mb-1">{{ $info['label'] }}</div>
                        @foreach($info['lines'] as $line)
                        <div class="text-sm font-medium text-primary dark:text-slate-200">{{ $line }}</div>
                        @endforeach
                    </div>
                </div>
                @endforeach

                {{-- Emergency Helpline Banner --}}
                <div class="p-5 rounded-2xl bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800/30">
                    <div class="flex items-center gap-3 mb-2">
                        <i data-lucide="alert-circle" class="w-5 h-5 text-red-600"></i>
                        <span class="font-bold text-red-700 dark:text-red-400">Cyber Crime Helpline</span>
                    </div>
                    <div class="text-3xl font-extrabold text-red-600 dark:text-red-400 mb-1">1930</div>
                    <p class="text-xs text-red-600/70 dark:text-red-400/70">National Cyber Crime Reporting Portal</p>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-2">
                @if(session('success'))
                <div class="mb-6 flex items-start gap-3 p-5 rounded-2xl bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800/30 text-green-800 dark:text-green-300">
                    <i data-lucide="check-circle-2" class="w-5 h-5 mt-0.5 flex-shrink-0"></i>
                    <div>
                        <div class="font-semibold mb-1">Message Submitted Successfully</div>
                        <div class="text-sm">{{ session('success') }}</div>
                    </div>
                </div>
                @endif

                <div class="bg-white dark:bg-slate-900 rounded-3xl border border-border dark:border-slate-800 shadow-[0_4px_30px_-10px_rgba(0,0,0,0.08)] p-8">
                    <h2 class="text-2xl font-extrabold text-primary dark:text-white mb-2">Send a Message</h2>
                    <p class="text-text-muted dark:text-slate-400 text-sm mb-8">Fill in the form below and our team will respond within 24–48 working hours.</p>

                    <form method="POST" action="{{ route('contact.store') }}" novalidate>
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            {{-- Name --}}
                            <div>
                                <label for="name" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Full Name <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i data-lucide="user" class="w-4 h-4 text-slate-400"></i>
                                    </div>
                                    <input id="name" name="name" type="text" value="{{ old('name') }}" required
                                        placeholder="Officer Ramesh Sharma"
                                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('name') ? 'border-red-400' : 'border-slate-200 dark:border-slate-700' }} text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                                </div>
                                @error('name')<p class="mt-1.5 text-xs text-red-500 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i>{{ $message }}</p>@enderror
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Official Email <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i data-lucide="mail" class="w-4 h-4 text-slate-400"></i>
                                    </div>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" required
                                        placeholder="officer@agency.gov.in"
                                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('email') ? 'border-red-400' : 'border-slate-200 dark:border-slate-700' }} text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                                </div>
                                @error('email')<p class="mt-1.5 text-xs text-red-500 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i>{{ $message }}</p>@enderror
                            </div>

                            {{-- Phone --}}
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Phone Number</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i data-lucide="phone" class="w-4 h-4 text-slate-400"></i>
                                    </div>
                                    <input id="phone" name="phone" type="tel" value="{{ old('phone') }}"
                                        placeholder="+91 98765 43210"
                                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('phone') ? 'border-red-400' : 'border-slate-200 dark:border-slate-700' }} text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                                </div>
                                @error('phone')<p class="mt-1.5 text-xs text-red-500 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i>{{ $message }}</p>@enderror
                            </div>

                            {{-- Department --}}
                            <div>
                                <label for="department" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Department / Agency</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i data-lucide="building-2" class="w-4 h-4 text-slate-400"></i>
                                    </div>
                                    <input id="department" name="department" type="text" value="{{ old('department') }}"
                                        placeholder="Gujarat Police, CBI, etc."
                                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                                </div>
                            </div>
                        </div>

                        {{-- Subject --}}
                        <div class="mb-5">
                            <label for="subject" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Subject <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="tag" class="w-4 h-4 text-slate-400"></i>
                                </div>
                                <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required
                                    placeholder="e.g. Access Request, Document Query, Technical Support..."
                                    class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border {{ $errors->has('subject') ? 'border-red-400' : 'border-slate-200 dark:border-slate-700' }} text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                            </div>
                            @error('subject')<p class="mt-1.5 text-xs text-red-500 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i>{{ $message }}</p>@enderror
                        </div>

                        {{-- Message --}}
                        <div class="mb-8">
                            <label for="message" class="block text-sm font-semibold text-primary dark:text-slate-300 mb-2">Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Please describe your query or request in detail (minimum 20 characters)..."
                                class="block w-full bg-slate-50 dark:bg-slate-800 border {{ $errors->has('message') ? 'border-red-400' : 'border-slate-200 dark:border-slate-700' }} text-primary dark:text-white rounded-xl p-4 focus:ring-2 focus:ring-accent focus:border-accent text-sm resize-none transition-all">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1.5 text-xs text-red-500 flex items-center gap-1"><i data-lucide="alert-circle" class="w-3 h-3"></i>{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" class="w-full flex justify-center items-center gap-2 py-4 px-6 rounded-xl bg-accent hover:bg-blue-700 text-white font-bold text-base transition-all duration-300 shadow-lg shadow-accent/20 transform hover:-translate-y-0.5">
                            <i data-lucide="send" class="w-5 h-5"></i>
                            Submit Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Quick Links --}}
<section class="py-16 bg-slate-50 dark:bg-slate-900/50 border-t border-border dark:border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-extrabold text-primary dark:text-white">Need Immediate Help?</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('ai.assistant') }}" class="flex items-center gap-4 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-border dark:border-slate-800 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-900/20 text-purple-600 flex items-center justify-center flex-shrink-0">
                    <i data-lucide="bot" class="w-6 h-6"></i>
                </div>
                <div>
                    <div class="font-bold text-primary dark:text-white">AI Assistant</div>
                    <div class="text-xs text-text-muted dark:text-slate-400 mt-1">Get instant legal guidance</div>
                </div>
                <i data-lucide="arrow-right" class="w-4 h-4 text-accent ml-auto"></i>
            </a>
            <a href="{{ route('search') }}" class="flex items-center gap-4 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-border dark:border-slate-800 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-900/20 text-accent flex items-center justify-center flex-shrink-0">
                    <i data-lucide="search" class="w-6 h-6"></i>
                </div>
                <div>
                    <div class="font-bold text-primary dark:text-white">Smart Search</div>
                    <div class="text-xs text-text-muted dark:text-slate-400 mt-1">Find any law or circular</div>
                </div>
                <i data-lucide="arrow-right" class="w-4 h-4 text-accent ml-auto"></i>
            </a>
            <a href="{{ route('legal.library') }}" class="flex items-center gap-4 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-border dark:border-slate-800 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                <div class="w-12 h-12 rounded-xl bg-green-50 dark:bg-green-900/20 text-green-600 flex items-center justify-center flex-shrink-0">
                    <i data-lucide="book-open" class="w-6 h-6"></i>
                </div>
                <div>
                    <div class="font-bold text-primary dark:text-white">Legal Library</div>
                    <div class="text-xs text-text-muted dark:text-slate-400 mt-1">Browse 5,000+ documents</div>
                </div>
                <i data-lucide="arrow-right" class="w-4 h-4 text-accent ml-auto"></i>
            </a>
        </div>
    </div>
</section>
</x-layout>

<x-layout>
{{-- Hero Banner --}}
<section class="relative py-24 bg-gradient-to-br from-[#0F172A] via-[#1E3A8A] to-[#0F172A] text-white overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-700/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 text-sm font-semibold mb-6">
            <i data-lucide="info" class="w-4 h-4"></i> About ULGIP
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
            Empowering Law Enforcement<br>
            <span class="text-blue-400">with Intelligence & Technology</span>
        </h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
            The Unified Legal & Government Intelligence Platform is India's premier AI-driven solution for law enforcement, built to modernise governance through technology.
        </p>
    </div>
</section>

{{-- Mission & Vision --}}
<section class="py-20 bg-white dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 dark:bg-blue-900/20 text-accent text-sm font-semibold mb-6 border border-blue-100 dark:border-blue-800/30">
                    <i data-lucide="target" class="w-4 h-4"></i> Our Mission
                </div>
                <h2 class="text-3xl font-extrabold text-primary dark:text-white mb-6">Transforming Governance Through AI</h2>
                <p class="text-text-muted dark:text-slate-400 leading-relaxed mb-6">
                    ULGIP was conceptualised to address a critical gap: law enforcement officers and government departments lacked a single, intelligent platform to access the vast ecosystem of Indian laws, circulars, SOPs, and case references.
                </p>
                <p class="text-text-muted dark:text-slate-400 leading-relaxed mb-8">
                    By integrating AI-powered search and legal assistance with a curated repository of 5,000+ documents, ULGIP empowers officers to make faster, more informed decisions while upholding the rule of law.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-blue-50 dark:bg-blue-900/20 rounded-2xl p-5 border border-blue-100 dark:border-blue-800/30">
                        <div class="text-3xl font-extrabold text-accent mb-1">{{ $stats['documents'] ?? 5000 }}+</div>
                        <div class="text-sm font-semibold text-primary dark:text-white">Legal Documents</div>
                    </div>
                    <div class="bg-green-50 dark:bg-green-900/20 rounded-2xl p-5 border border-green-100 dark:border-green-800/30">
                        <div class="text-3xl font-extrabold text-green-600 mb-1">{{ $stats['circulars'] ?? 250 }}+</div>
                        <div class="text-sm font-semibold text-primary dark:text-white">Govt. Circulars</div>
                    </div>
                    <div class="bg-purple-50 dark:bg-purple-900/20 rounded-2xl p-5 border border-purple-100 dark:border-purple-800/30">
                        <div class="text-3xl font-extrabold text-purple-600 mb-1">{{ $stats['sops'] ?? 100 }}+</div>
                        <div class="text-sm font-semibold text-primary dark:text-white">SOPs Available</div>
                    </div>
                    <div class="bg-orange-50 dark:bg-orange-900/20 rounded-2xl p-5 border border-orange-100 dark:border-orange-800/30">
                        <div class="text-3xl font-extrabold text-orange-500 mb-1">24/7</div>
                        <div class="text-sm font-semibold text-primary dark:text-white">AI Assistance</div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                @foreach([
                    ['icon'=>'eye','color'=>'blue','title'=>'Our Vision','text'=>'To be the backbone of digital law enforcement in India — a trusted, intelligent, and always-available platform that bridges the gap between technology and justice.'],
                    ['icon'=>'shield-check','color'=>'green','title'=>'Security First','text'=>'Built on zero-trust architecture with role-based access controls, ensuring sensitive legal data is accessible only to verified government personnel.'],
                    ['icon'=>'globe','color'=>'purple','title'=>'Multilingual Access','text'=>'Supporting English, Hindi, and Gujarati to ensure every officer across India can access legal intelligence in their preferred language.'],
                    ['icon'=>'cpu','color'=>'orange','title'=>'AI-Powered Core','text'=>'Advanced natural language processing trained on Indian legal corpus enables intelligent search, legal provision identification, and document summarisation.'],
                ] as $item)
                <div class="flex gap-5 p-5 rounded-2xl border border-border dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-{{ $item['color'] }}-50 dark:bg-{{ $item['color'] }}-900/20 text-{{ $item['color'] }}-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-primary dark:text-white mb-2">{{ $item['title'] }}</h3>
                        <p class="text-sm text-text-muted dark:text-slate-400 leading-relaxed">{{ $item['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Key Features Grid --}}
<section class="py-20 bg-slate-50 dark:bg-slate-900/50">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400">Platform Capabilities</h2>
            <p class="text-text-muted dark:text-slate-400 mt-3 max-w-2xl mx-auto">Built ground-up for Indian law enforcement with features that matter.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['icon'=>'file-text','color'=>'blue','title'=>'Legal Document Repository','text'=>'5,000+ acts, rules, SOPs, and circulars indexed and searchable in real-time.'],
                ['icon'=>'bot','color'=>'purple','title'=>'AI Legal Assistant','text'=>'Conversational AI trained on Indian legal corpus for instant guidance on any query.'],
                ['icon'=>'search','color'=>'green','title'=>'Smart Search Engine','text'=>'Semantic search across the entire legal database — find any document in seconds.'],
                ['icon'=>'bell','color'=>'orange','title'=>'Cyber Alert Feed','text'=>'Real-time cybersecurity alerts from CERT-In, RBI, NPCI and other agencies.'],
                ['icon'=>'bar-chart-2','color'=>'blue','title'=>'Analytics Dashboard','text'=>'Visual insights into legal trends, alert patterns, and department activity.'],
                ['icon'=>'lock','color'=>'red','title'=>'Role-Based Access','text'=>'Granular permissions for officers, nodal officers, and administrators.'],
                ['icon'=>'download','color'=>'teal','title'=>'Document Downloads','text'=>'Download any document as PDF directly from the platform.'],
                ['icon'=>'globe','color'=>'indigo','title'=>'Multilingual Support','text'=>'Full support for English, Hindi, and Gujarati interfaces.'],
                ['icon'=>'shield','color'=>'green','title'=>'Secure & Compliant','text'=>'Compliant with Government of India IT security policies and CERT-In guidelines.'],
            ] as $feat)
            <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-border dark:border-slate-800 shadow-sm hover:shadow-md transition-all hover:-translate-y-1 duration-300">
                <div class="w-11 h-11 rounded-xl bg-{{ $feat['color'] }}-50 dark:bg-{{ $feat['color'] }}-900/20 text-{{ $feat['color'] }}-600 flex items-center justify-center mb-4">
                    <i data-lucide="{{ $feat['icon'] }}" class="w-5 h-5"></i>
                </div>
                <h3 class="font-bold text-primary dark:text-white mb-2">{{ $feat['title'] }}</h3>
                <p class="text-sm text-text-muted dark:text-slate-400 leading-relaxed">{{ $feat['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Technology Stack --}}
<section class="py-20 bg-white dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400">Built with Modern Technology</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['name'=>'Laravel 12','desc'=>'Enterprise PHP Framework','icon'=>'code-2','color'=>'red'],
                ['name'=>'Tailwind CSS','desc'=>'Utility-First Styling','icon'=>'paintbrush','color'=>'blue'],
                ['name'=>'AI/NLP Engine','desc'=>'Legal Intelligence Core','icon'=>'cpu','color'=>'purple'],
                ['name'=>'MySQL','desc'=>'Relational Database','icon'=>'database','color'=>'orange'],
                ['name'=>'Lucide Icons','desc'=>'Premium Icon Library','icon'=>'layers','color'=>'green'],
                ['name'=>'Alpine.js','desc'=>'Lightweight JS Framework','icon'=>'zap','color'=>'yellow'],
                ['name'=>'Vite','desc'=>'Fast Build Tooling','icon'=>'package','color'=>'blue'],
                ['name'=>'CERT-In APIs','desc'=>'Threat Intelligence Feed','icon'=>'shield','color'=>'red'],
            ] as $tech)
            <div class="text-center p-6 rounded-2xl border border-border dark:border-slate-800 bg-slate-50 dark:bg-slate-900 hover:border-accent dark:hover:border-accent transition-colors">
                <div class="w-12 h-12 rounded-xl bg-{{ $tech['color'] }}-100 dark:bg-{{ $tech['color'] }}-900/30 text-{{ $tech['color'] }}-600 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="{{ $tech['icon'] }}" class="w-6 h-6"></i>
                </div>
                <div class="font-bold text-primary dark:text-white text-sm">{{ $tech['name'] }}</div>
                <div class="text-xs text-text-muted dark:text-slate-500 mt-1">{{ $tech['desc'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Timeline --}}
<section class="py-20 bg-slate-50 dark:bg-slate-900/50">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <h2 class="text-3xl font-extrabold text-gov-blue dark:text-blue-400">Development Roadmap</h2>
        </div>
        <div class="relative max-w-3xl mx-auto">
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-border dark:bg-slate-800"></div>
            @foreach([
                ['phase'=>'Phase 1','status'=>'complete','date'=>'Q1 2026','title'=>'Foundation & Core Platform','items'=>['Laravel 12 setup with Breeze auth','Custom UI design matching govt standards','Legal document repository (5,000+ docs)','Multi-language support (EN/HI/GU)']],
                ['phase'=>'Phase 2','status'=>'current','date'=>'Q2 2026','title'=>'AI Integration & Search','items'=>['AI Legal Assistant with NLP','Smart semantic search engine','Cyber alert real-time feed','Contact & reporting system']],
                ['phase'=>'Phase 3','status'=>'upcoming','date'=>'Q3 2026','title'=>'Advanced Analytics','items'=>['Officer analytics dashboard','Case management module','Automated circular notifications','Mobile application (Android/iOS)']],
                ['phase'=>'Phase 4','status'=>'upcoming','date'=>'Q4 2026','title'=>'National Rollout','items'=>['Integration with CCTNS','NCCRP portal API connection','State police integration','Performance analytics portal']],
            ] as $step)
            <div class="relative flex gap-8 mb-10">
                <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0 border-4 border-white dark:border-slate-950 z-10 shadow-md
                    {{ $step['status'] === 'complete' ? 'bg-green-500' : ($step['status'] === 'current' ? 'bg-accent' : 'bg-slate-300 dark:bg-slate-700') }}">
                    <i data-lucide="{{ $step['status'] === 'complete' ? 'check' : ($step['status'] === 'current' ? 'zap' : 'clock') }}" class="w-6 h-6 text-white"></i>
                </div>
                <div class="flex-1 pb-4">
                    <div class="flex flex-wrap items-center gap-3 mb-3">
                        <span class="text-xs font-bold px-3 py-1 rounded-full
                            {{ $step['status'] === 'complete' ? 'bg-green-100 text-green-700' : ($step['status'] === 'current' ? 'bg-blue-100 text-accent' : 'bg-slate-100 dark:bg-slate-800 text-text-muted dark:text-slate-400') }}">
                            {{ $step['phase'] }}
                        </span>
                        <span class="text-xs text-text-muted dark:text-slate-500">{{ $step['date'] }}</span>
                        @if($step['status'] === 'current')
                        <span class="text-xs font-semibold text-accent animate-pulse">● In Progress</span>
                        @elseif($step['status'] === 'complete')
                        <span class="text-xs font-semibold text-green-600">✓ Complete</span>
                        @endif
                    </div>
                    <h3 class="font-bold text-primary dark:text-white mb-3 text-lg">{{ $step['title'] }}</h3>
                    <ul class="space-y-2">
                        @foreach($step['items'] as $item)
                        <li class="flex items-center gap-2 text-sm text-text-muted dark:text-slate-400">
                            <i data-lucide="{{ $step['status'] === 'complete' ? 'check-circle-2' : 'circle-dot' }}" class="w-4 h-4 {{ $step['status'] === 'complete' ? 'text-green-500' : 'text-accent' }} flex-shrink-0"></i>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Ministry Partners --}}
<section class="py-20 bg-white dark:bg-[#020617] border-t border-border dark:border-slate-800">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm font-semibold text-text-muted dark:text-slate-500 uppercase tracking-widest mb-8">Government Partners & Data Sources</p>
        <div class="flex flex-wrap justify-center items-center gap-8">
@foreach([
    'Ministry of Home Affairs',
    'CERT-In',
    'NCCRP',
    'NPA Hyderabad',
    'NCRB',
    'Ministry of Electronics & IT',
    'Reserve Bank of India',
    'NPCI',
    'UIDAI'
] as $partner)            <div class="px-5 py-3 rounded-xl border border-border dark:border-slate-800 bg-slate-50 dark:bg-slate-900 text-xs font-semibold text-text-muted dark:text-slate-400">
                {{ $partner }}
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-gradient-to-br from-[#1E3A8A] to-[#2563EB] text-white">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold mb-4">Ready to Explore the Platform?</h2>
        <p class="text-blue-100 mb-10 max-w-2xl mx-auto">Join thousands of law enforcement officers already using ULGIP to access legal intelligence faster and smarter.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-accent font-bold hover:bg-blue-50 transition-colors shadow-lg text-base">
                <i data-lucide="user-plus" class="w-5 h-5"></i> Register Now
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white/10 border border-white/30 text-white font-bold hover:bg-white/20 transition-colors text-base">
                <i data-lucide="phone" class="w-5 h-5"></i> Contact Us
            </a>
        </div>
    </div>
</section>
</x-layout>

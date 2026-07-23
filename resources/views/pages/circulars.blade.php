<x-layout>
{{-- Hero --}}
<section class="relative py-20 bg-gradient-to-br from-[#0F172A] via-[#7C3AED] to-[#1E3A8A] text-white overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-violet-500/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-violet-500/20 border border-violet-400/30 text-violet-300 text-sm font-semibold mb-5">
                    <i data-lucide="megaphone" class="w-4 h-4"></i> Government Circulars
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Government Circulars & Notifications</h1>
                <p class="text-blue-100 max-w-2xl">Latest advisories, notifications, and guidelines from central government ministries and agencies.</p>
            </div>
            <a href="{{ route('ai.assistant') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/10 border border-white/30 text-white font-semibold hover:bg-white/20 transition-colors text-sm self-start">
                <i data-lucide="bot" class="w-4 h-4"></i> Get AI Summary
            </a>
        </div>
    </div>
</section>

{{-- Filters + Content --}}
<section class="py-16 bg-slate-50 dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Stats Bar --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            @foreach([
                ['label'=>'Total Circulars','value'=>$circulars->total(),'icon'=>'file-text','color'=>'blue'],
                ['label'=>'Advisories','value'=>'12','icon'=>'alert-circle','color'=>'orange'],
                ['label'=>'Guidelines','value'=>'8','icon'=>'book','color'=>'green'],
                ['label'=>'This Month','value'=>'6','icon'=>'calendar','color'=>'purple'],
            ] as $s)
            <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 p-4 flex items-center gap-4 shadow-sm">
                <div class="w-10 h-10 rounded-xl bg-{{ $s['color'] }}-50 dark:bg-{{ $s['color'] }}-900/20 text-{{ $s['color'] }}-600 flex items-center justify-center flex-shrink-0">
                    <i data-lucide="{{ $s['icon'] }}" class="w-5 h-5"></i>
                </div>
                <div>
                    <div class="text-xl font-extrabold text-primary dark:text-white">{{ $s['value'] }}</div>
                    <div class="text-xs text-text-muted dark:text-slate-500">{{ $s['label'] }}</div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Search & Filter --}}
        <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 p-5 mb-8 shadow-sm">
            <form method="GET" action="{{ route('circulars') }}" class="flex flex-col md:flex-row gap-4">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-lucide="search" class="w-4 h-4 text-slate-400"></i>
                    </div>
                    <input type="text" name="q" value="{{ $search }}" placeholder="Search circulars by title, reference number..."
                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent text-sm">
                </div>
                <select name="category" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-accent min-w-[160px]">
                    <option value="all">All Types</option>
                    <option value="advisory" {{ $category==='advisory'?'selected':'' }}>Advisory</option>
                    <option value="guideline" {{ $category==='guideline'?'selected':'' }}>Guideline</option>
                    <option value="protocol" {{ $category==='protocol'?'selected':'' }}>Protocol</option>
                    <option value="summary" {{ $category==='summary'?'selected':'' }}>Summary</option>
                    <option value="rule" {{ $category==='rule'?'selected':'' }}>Rule</option>
                </select>
                <select name="sort" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-accent min-w-[150px]">
                    <option value="latest" {{ $sort==='latest'?'selected':'' }}>Newest First</option>
                    <option value="oldest" {{ $sort==='oldest'?'selected':'' }}>Oldest First</option>
                </select>
                <button type="submit" class="px-6 py-3 bg-accent hover:bg-blue-700 text-white font-semibold rounded-xl text-sm transition-colors flex items-center gap-2">
                    <i data-lucide="filter" class="w-4 h-4"></i> Filter
                </button>
            </form>
        </div>

        {{-- Circulars List --}}
        @if($circulars->count())
        <div class="space-y-4 mb-10">
            @foreach($circulars as $circular)
            <div class="group bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 shadow-sm hover:shadow-md hover:border-accent/30 transition-all duration-300 p-6">
                <div class="flex flex-col md:flex-row md:items-center gap-5">
                    {{-- Icon --}}
                    <div class="w-14 h-14 rounded-2xl bg-red-50 dark:bg-red-900/20 text-red-500 flex items-center justify-center flex-shrink-0 relative">
                        <i data-lucide="file-text" class="w-7 h-7"></i>
                        <span class="absolute -bottom-1 -right-1 text-[9px] font-bold bg-red-500 text-white px-1.5 py-0.5 rounded-full">PDF</span>
                    </div>
                    {{-- Content --}}
                    <div class="flex-1 min-w-0">
                        <div class="flex flex-wrap items-center gap-2 mb-2">
                            @if($circular->sub_category)
                            <span class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 uppercase">{{ $circular->sub_category }}</span>
                            @endif
                            @if($circular->is_featured)
                            <span class="text-[10px] font-bold px-2.5 py-1 rounded-full bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 flex items-center gap-1">
                                <i data-lucide="star" class="w-2.5 h-2.5"></i> Featured
                            </span>
                            @endif
                        </div>
                        <h3 class="font-bold text-primary dark:text-white text-base leading-snug mb-2 group-hover:text-accent transition-colors">{{ $circular->title }}</h3>
                        @if($circular->description)
                        <p class="text-sm text-text-muted dark:text-slate-400 leading-relaxed mb-3 line-clamp-2">{{ $circular->description }}</p>
                        @endif
                        <div class="flex flex-wrap gap-4 text-xs text-text-muted dark:text-slate-500">
                            @if($circular->reference_number)
                            <span class="flex items-center gap-1"><i data-lucide="hash" class="w-3 h-3"></i> {{ $circular->reference_number }}</span>
                            @endif
                            @if($circular->issued_by)
                            <span class="flex items-center gap-1"><i data-lucide="building-2" class="w-3 h-3"></i> {{ $circular->issued_by }}</span>
                            @endif
                            @if($circular->published_date)
                            <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-3 h-3"></i> {{ $circular->published_date->format('d M Y') }}</span>
                            @endif
                            @if($circular->file_size)
                            <span class="flex items-center gap-1"><i data-lucide="file" class="w-3 h-3"></i> {{ $circular->file_size }}</span>
                            @endif
                        </div>
                    </div>
                    {{-- Actions --}}
                    <div class="flex flex-col sm:flex-row gap-2 flex-shrink-0">
                        <a href="{{ route('ai.assistant') }}"
                            class="flex items-center justify-center gap-2 px-4 py-2 rounded-xl border border-blue-200 dark:border-blue-800 text-accent text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">
                            <i data-lucide="bot" class="w-3.5 h-3.5"></i> Summarise
                        </a>
                        <a href="{{ route('resources') }}"
                            class="flex items-center justify-center gap-2 px-4 py-2 rounded-xl bg-accent text-white text-xs font-semibold hover:bg-blue-700 transition-colors shadow-sm">
                            <i data-lucide="download" class="w-3.5 h-3.5"></i> Download
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- Pagination --}}
        <div class="flex justify-center">
            {{ $circulars->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <div class="w-20 h-20 mx-auto bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mb-6">
                <i data-lucide="search-x" class="w-10 h-10 text-text-muted dark:text-slate-500"></i>
            </div>
            <h3 class="text-xl font-bold text-primary dark:text-white mb-2">No Circulars Found</h3>
            <p class="text-text-muted dark:text-slate-400 mb-6">Try different search terms or clear the filters.</p>
            <a href="{{ route('circulars') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-accent text-white rounded-xl font-semibold text-sm hover:bg-blue-700 transition-colors">
                <i data-lucide="refresh-ccw" class="w-4 h-4"></i> Reset Filters
            </a>
        </div>
        @endif
    </div>
</section>
</x-layout>

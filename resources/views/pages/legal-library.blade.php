<x-layout>
{{-- Hero --}}
<section class="relative py-20 bg-gradient-to-br from-[#0F172A] via-[#1E3A8A] to-[#0F172A] text-white overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-500/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-300 text-sm font-semibold mb-5">
                    <i data-lucide="book-open" class="w-4 h-4"></i> Legal Library
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Legal Document Repository</h1>
                <p class="text-blue-100 max-w-2xl">Access 5,000+ Acts, Rules, SOPs and legal references — all in one unified repository.</p>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('search') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-white/10 border border-white/30 text-white font-semibold hover:bg-white/20 transition-colors text-sm">
                    <i data-lucide="search" class="w-4 h-4"></i> Smart Search
                </a>
                <a href="{{ route('ai.assistant') }}" class="inline-flex items-center gap-2 px-5 py-3 rounded-xl bg-accent border border-accent text-white font-semibold hover:bg-blue-500 transition-colors text-sm">
                    <i data-lucide="bot" class="w-4 h-4"></i> AI Guidance
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Filters + Grid --}}
<section class="py-16 bg-slate-50 dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Search & Filter Bar --}}
        <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 p-5 mb-8 shadow-sm">
            <form method="GET" action="{{ route('legal.library') }}" class="flex flex-col md:flex-row gap-4">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-lucide="search" class="w-4 h-4 text-slate-400"></i>
                    </div>
                    <input type="text" name="q" value="{{ $search }}" placeholder="Search by title, reference number, or issuing body..."
                        class="block w-full pl-11 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl py-3 focus:ring-2 focus:ring-accent focus:border-accent text-sm transition-all">
                </div>
                <select name="sort" class="bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-primary dark:text-white rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-accent min-w-[160px]">
                    <option value="latest" {{ $sort==='latest'?'selected':'' }}>Newest First</option>
                    <option value="oldest" {{ $sort==='oldest'?'selected':'' }}>Oldest First</option>
                    <option value="title" {{ $sort==='title'?'selected':'' }}>Title A–Z</option>
                    <option value="downloads" {{ $sort==='downloads'?'selected':'' }}>Most Downloaded</option>
                </select>
                <button type="submit" class="px-6 py-3 bg-accent hover:bg-blue-700 text-white font-semibold rounded-xl text-sm transition-colors flex items-center gap-2">
                    <i data-lucide="filter" class="w-4 h-4"></i> Apply
                </button>
            </form>
        </div>

        {{-- Category Tabs --}}
        <div class="flex flex-wrap gap-3 mb-8">
            @foreach([
                ['key'=>'all',  'label'=>'All Documents', 'count'=>$counts['all']],
                ['key'=>'legal','label'=>'Acts & Laws',   'count'=>$counts['legal']],
                ['key'=>'sop',  'label'=>'SOPs',          'count'=>$counts['sop']],
                ['key'=>'act',  'label'=>'Acts Only',     'count'=>$counts['act'] ?? 0],
                ['key'=>'rule', 'label'=>'Rules',         'count'=>$counts['rule'] ?? 0],
            ] as $tab)
            <a href="{{ route('legal.library', array_merge(request()->query(), ['category'=>$tab['key']])) }}"
                class="flex items-center gap-2 px-5 py-2.5 rounded-xl text-sm font-semibold border transition-all
                {{ $category === $tab['key'] ? 'bg-accent border-accent text-white shadow-md shadow-accent/20' : 'bg-white dark:bg-slate-900 border-border dark:border-slate-800 text-primary dark:text-slate-300 hover:border-accent hover:text-accent' }}">
                {{ $tab['label'] }}
                <span class="px-2 py-0.5 rounded-full text-xs {{ $category === $tab['key'] ? 'bg-white/20 text-white' : 'bg-slate-100 dark:bg-slate-800 text-text-muted dark:text-slate-500' }}">{{ $tab['count'] }}</span>
            </a>
            @endforeach
        </div>

        {{-- Document Grid --}}
        @if($documents->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
            @foreach($documents as $doc)
<div class="group bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-md hover:shadow-2xl hover:-translate-y-2 hover:border-blue-500/40 transition-all duration-500 overflow-hidden flex flex-col">                <div class="p-7 flex-1">
                    <div class="flex items-start justify-between gap-3 mb-4">
                        <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0
                            {{ $doc->category === 'sop' ? 'bg-purple-50 dark:bg-purple-900/20 text-purple-600' : ($doc->category === 'circular' ? 'bg-red-50 dark:bg-red-900/20 text-red-500' : 'bg-blue-50 dark:bg-blue-900/20 text-accent') }}">
                            <i data-lucide="{{ $doc->category === 'sop' ? 'clipboard-list' : 'file-text' }}" class="w-5 h-5"></i>
                        </div>
                        <span class="text-[10px] font-bold px-2 py-1 rounded-full
                            {{ $doc->category === 'sop' ? 'bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300' : ($doc->category === 'circular' ? 'bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-300' : 'bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300') }}">
                            {{ strtoupper($doc->category) }}
                        </span>
                    </div>
<h3 class="font-bold text-primary dark:text-white text-xl leading-tight mb-3 group-hover:text-accent transition-colors duration-300">                    @if($doc->description)
                    <p class="text-xs text-text-muted dark:text-slate-400 leading-relaxed mb-4 line-clamp-2">{{ $doc->description }}</p>
                    @endif
                    <div class="space-y-1.5 text-xs text-text-muted dark:text-slate-500">
                        @if($doc->reference_number)
                        <div class="flex items-center gap-2"><i data-lucide="hash" class="w-3 h-3"></i> {{ $doc->reference_number }}</div>
                        @endif
                        @if($doc->issued_by)
                        <div class="flex items-center gap-2"><i data-lucide="building-2" class="w-3 h-3"></i> {{ $doc->issued_by }}</div>
                        @endif
                        @if($doc->published_date)
                        <div class="flex items-center gap-2"><i data-lucide="calendar" class="w-3 h-3"></i> {{ $doc->published_date->format('d M Y') }}</div>
                        @endif
                    </div>
                </div>
                {{-- Card Footer --}}
<div class="px-6 py-5 border-t border-slate-200 dark:border-slate-800 bg-gradient-to-r from-blue-50 to-white dark:from-slate-900 dark:to-slate-800 flex items-center justify-between gap-3">                    <div class="flex items-center gap-3 text-xs text-text-muted dark:text-slate-500">
                        @if($doc->file_size)
                        <span class="flex items-center gap-1"><i data-lucide="file" class="w-3 h-3"></i> {{ $doc->file_type }} · {{ $doc->file_size }}</span>
                        @endif
                        @if($doc->download_count > 0)
                        <span class="flex items-center gap-1"><i data-lucide="download" class="w-3 h-3"></i> {{ $doc->download_count }}</span>
                        @endif
                    </div>
                    <a href="{{ route('document.preview', $doc) }}"
                     target="_blank"                        class="flex items-center gap-1.5 text-xs font-semibold text-accent hover:text-blue-700 transition-colors group">
                        preview <i data-lucide="arrow-right" class="w-3 h-3 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        {{-- Pagination --}}
        <div class="flex justify-center">
            {{ $documents->links() }}
        </div>
        @else
        <div class="text-center py-20">
            <div class="w-20 h-20 mx-auto bg-slate-100 dark:bg-slate-800 rounded-full flex items-center justify-center mb-6">
                <i data-lucide="search-x" class="w-10 h-10 text-text-muted dark:text-slate-500"></i>
            </div>
            <h3 class="text-xl font-bold text-primary dark:text-white mb-2">No Documents Found</h3>
            <p class="text-text-muted dark:text-slate-400 mb-6">Try adjusting your search terms or category filter.</p>
            <a href="{{ route('legal.library') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-accent text-white rounded-xl font-semibold text-sm hover:bg-blue-700 transition-colors">
                <i data-lucide="refresh-ccw" class="w-4 h-4"></i> Reset Filters
            </a>
        </div>
        @endif
    </div>
</section>
</x-layout>

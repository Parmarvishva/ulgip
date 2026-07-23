<x-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Premium Hero Banner -->
        <div class="relative rounded-3xl overflow-hidden bg-gradient-to-r from-sky-600 to-cyan-400 dark:from-sky-800 dark:to-cyan-700 text-white shadow-lg">
            <div class="absolute inset-0 backdrop-blur-md bg-white/5 dark:bg-black/20"></div>
            <div class="relative z-10 px-6 py-8 sm:px-10 lg:px-12">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold leading-tight">Good Morning, {{ Auth::user()->name }}</h2>
                        <div class="mt-2 flex items-center gap-4 text-sm opacity-95">
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4 opacity-90"></i>
                                <span>{{ \Carbon\Carbon::now()->format('F j, Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="clock" class="w-4 h-4 opacity-90"></i>
                                <span id="live-time">{{ now()->format('H:i:s') }}</span>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur text-xs">
                                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                                <strong class="text-xs">Online</strong>
                            </div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-xs">
                                <i data-lucide="shield" class="w-3 h-3"></i>
                                <span class="text-xs">Security: <strong class="ml-1">{{ Auth::user()->security_level ?? 'Level 1' }}</strong></span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        @if(Route::has('ai.assistant'))
                        <a href="{{ route('ai.assistant') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white/10 hover:bg-white/20 transition shadow-sm">
                            <i data-lucide="bot" class="w-5 h-5"></i>
                            <span class="text-sm font-medium">AI Assistant</span>
                        </a>
                        @else
                        <button class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white/10 text-sm">AI Assistant</button>
                        @endif

                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-white/10 hover:bg-white/20 transition shadow-sm">
                            <i data-lucide="user" class="w-5 h-5"></i>
                            <span class="text-sm">Profile</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-red-600 hover:bg-red-700 transition shadow-sm">
                                <i data-lucide="log-out" class="w-5 h-5"></i>
                                <span class="text-sm">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="absolute -bottom-6 -left-6 w-72 h-72 rounded-full bg-white/5 blur-3xl opacity-60 transform rotate-12"></div>
            <div class="absolute -top-8 -right-10 w-48 h-48 rounded-full bg-white/3 blur-2xl opacity-40"></div>
        </div>

        <!-- Stats Cards -->
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
                $docs = $documentsCount ?? 0;
                $circulars = $circularsCount ?? 0;
                $alerts = $cyberAlertsCount ?? 0;
                $searches = $aiSearchesCount ?? 0;
            @endphp

            <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 hover:scale-105 transform transition shadow-md">
                <div class="flex items-start justify-between">
                    <div>
                        <div class="text-sm text-white/90">Documents</div>
                        <div class="mt-2 text-2xl font-bold">{{ $docs }}</div>
                        <div class="mt-3 text-xs text-white/80 inline-flex items-center gap-2">
                            <i data-lucide="trending-up" class="w-4 h-4 text-cyan-200"></i>
                            <span class="text-xs">{{ $docsChange ?? '+3.4%' }} this month</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-400 flex items-center justify-center shadow-lg">
                            <i data-lucide="file-text" class="w-7 h-7 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 hover:scale-105 transform transition shadow-md">
                <div class="flex items-start justify-between">
                    <div>
                        <div class="text-sm text-white/90">Government Circulars</div>
                        <div class="mt-2 text-2xl font-bold">{{ $circulars }}</div>
                        <div class="mt-3 text-xs text-white/80 inline-flex items-center gap-2">
                            <i data-lucide="book-open" class="w-4 h-4 text-cyan-200"></i>
                            <span>{{ $circularsChange ?? '+1.1%' }} this month</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-sky-500 to-blue-400 flex items-center justify-center shadow-lg">
                            <i data-lucide="book" class="w-7 h-7 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 hover:scale-105 transform transition shadow-md">
                <div class="flex items-start justify-between">
                    <div>
                        <div class="text-sm text-white/90">Cyber Alerts</div>
                        <div class="mt-2 text-2xl font-bold">{{ $alerts }}</div>
                        <div class="mt-3 text-xs text-white/80 inline-flex items-center gap-2">
                            <i data-lucide="shield-alert" class="w-4 h-4 text-orange-200"></i>
                            <span>{{ $alertsChange ?? '-0.4%' }} since yesterday</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-red-500 to-orange-400 flex items-center justify-center shadow-lg">
                            <i data-lucide="alert-circle" class="w-7 h-7 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 hover:scale-105 transform transition shadow-md">
                <div class="flex items-start justify-between">
                    <div>
                        <div class="text-sm text-white/90">AI Searches</div>
                        <div class="mt-2 text-2xl font-bold">{{ $searches }}</div>
                        <div class="mt-3 text-xs text-white/80 inline-flex items-center gap-2">
                            <i data-lucide="zap" class="w-4 h-4 text-cyan-200"></i>
                            <span>{{ $searchesChange ?? '+8.2%' }} today</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 rounded-xl bg-gradient-to-br from-indigo-500 to-cyan-400 flex items-center justify-center shadow-lg">
                            <i data-lucide="search" class="w-7 h-7 text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <!-- Quick Actions -->
                <div class="rounded-3xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        @php
                            $actions = [
                                ['label' => 'AI Assistant', 'icon' => 'bot', 'route' => Route::has('ai.assistant') ? route('ai.assistant') : '#'],
                                ['label' => 'Legal Library', 'icon' => 'book-open', 'route' => Route::has('library.index') ? route('library.index') : '#'],
                                ['label' => 'Government Circulars', 'icon' => 'file-text', 'route' => Route::has('circulars.index') ? route('circulars.index') : '#'],
                                ['label' => 'Smart Search', 'icon' => 'search', 'route' => Route::has('search') ? route('search') : '#'],
                                ['label' => 'Cyber Alerts', 'icon' => 'shield-alert', 'route' => Route::has('cyber.alerts') ? route('cyber.alerts') : '#'],
                                ['label' => 'Settings', 'icon' => 'settings', 'route' => Route::has('profile.edit') ? route('profile.edit') : '#'],
                            ];
                        @endphp

                        @foreach($actions as $act)
                        <a href="{{ $act['route'] }}" class="group rounded-2xl p-4 flex flex-col items-start gap-3 bg-white/3 hover:bg-white/6 transition-all ring-1 ring-white/5">
                            <div class="w-12 h-12 rounded-xl flex items-center justify-center bg-gradient-to-br from-white/10 to-white/5 group-hover:from-white/20 group-hover:to-white/10 transition-shadow shadow-md">
                                <i data-lucide="{{ $act['icon'] }}" class="w-5 h-5 text-white"></i>
                            </div>
                            <div class="text-sm font-medium text-white">{{ $act['label'] }}</div>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Recent Activity Timeline -->
                <div class="rounded-3xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        @if(isset($activities) && count($activities))
                            @foreach($activities as $act)
                                <div class="flex items-start gap-4">
                                    <div class="mt-1">
                                        <span class="w-3 h-3 block rounded-full bg-cyan-400"></span>
                                    </div>
                                    <div class="flex-1">
                                        <div class="text-sm text-white/90 font-medium">{{ $act->title ?? $act['title'] ?? 'Activity' }}</div>
                                        <div class="text-xs text-white/70 mt-1">{{ $act->subtitle ?? $act['subtitle'] ?? ($act->created_at ?? now())->diffForHumans() }}</div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-sm text-white/80">No recent activity available.</div>
                        @endif
                    </div>
                </div>

                <!-- Analytics Cards (sparkline placeholders) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm text-white/90">Traffic</div>
                                <div class="text-2xl font-bold text-white mt-1">{{ $traffic ?? '1.2k' }}</div>
                            </div>
                            <div class="w-36 h-12">
                                <!-- simple inline svg sparkline -->
                                <svg viewBox="0 0 100 30" class="w-full h-full text-white/70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="0,20 20,10 40,12 60,6 80,8 100,4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity="0.85" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-sm text-white/90">Active Users</div>
                                <div class="text-2xl font-bold text-white mt-1">{{ $activeUsers ?? '312' }}</div>
                            </div>
                            <div class="w-36 h-12">
                                <svg viewBox="0 0 100 30" class="w-full h-full text-white/70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="0,12 20,14 40,8 60,10 80,6 100,8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity="0.85" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                <!-- Recent Circulars -->
                <div class="rounded-3xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-4">Recent Circulars</h3>
                    <div class="space-y-3">
                        @if(isset($circularsList) && count($circularsList))
                            @foreach($circularsList as $c)
                                <div class="flex items-center justify-between gap-4 p-3 rounded-xl bg-white/3 hover:bg-white/6 transition">
                                    <div>
                                        <div class="text-sm font-medium text-white">{{ $c->title }}</div>
                                        <div class="text-xs text-white/70">{{ $c->category ?? 'General' }} • {{ \Carbon\Carbon::parse($c->created_at)->format('M j') }}</div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-xs px-2 py-1 rounded-full bg-white/6">{{ $c->status ?? 'Published' }}</span>
                                        <a href="{{ Route::has('circulars.show') ? route('circulars.show', $c->id) : '#' }}" class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20">
                                            <i data-lucide="eye" class="w-4 h-4"></i>
                                            <span class="text-xs">View</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-sm text-white/80">No circulars found.</div>
                        @endif
                    </div>
                </div>

                <!-- Latest Cyber Alerts -->
                <div class="rounded-3xl p-6 bg-white/5 backdrop-blur border border-white/10 shadow-sm">
                    <h3 class="text-lg font-semibold text-white mb-4">Latest Cyber Alerts</h3>
                    <div class="space-y-3">
                        @if(isset($alertsList) && count($alertsList))
                            @foreach($alertsList as $a)
                                @php
                                    $sev = strtolower($a->severity ?? ($a['severity'] ?? 'low'));
                                    $color = match($sev) {
                                        'critical' => 'bg-red-600',
                                        'high' => 'bg-orange-500',
                                        'medium' => 'bg-yellow-400',
                                        default => 'bg-green-500',
                                    };
                                @endphp
                                <div class="flex items-center justify-between gap-4 p-3 rounded-xl bg-white/3 hover:bg-white/6 transition">
                                    <div>
                                        <div class="text-sm font-medium text-white">{{ $a->title ?? $a['title'] }}</div>
                                        <div class="text-xs text-white/70">{{ $a->source ?? 'System' }} • {{ \Carbon\Carbon::parse($a->created_at ?? now())->diffForHumans() }}</div>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <span class="text-xs px-2 py-1 rounded-full text-white {{ $color }}">{{ ucfirst($sev) }}</span>
                                        <a href="#" class="inline-flex items-center gap-2 px-3 py-1 rounded-lg bg-white/10 hover:bg-white/20">
                                            <i data-lucide="eye" class="w-4 h-4"></i>
                                            <span class="text-xs">Details</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-sm text-white/80">No cyber alerts at this time.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Small JS for live time update -->
        <script>
            (function(){
                function pad(n){return n<10? '0'+n : n}
                function tick(){
                    const el = document.getElementById('live-time');
                    if(!el) return;
                    const d = new Date();
                    el.textContent = pad(d.getHours())+ ':'+ pad(d.getMinutes()) + ':' + pad(d.getSeconds());
                }
                setInterval(tick,1000);
                tick();
            })();
        </script>

    </div>
</x-layout>

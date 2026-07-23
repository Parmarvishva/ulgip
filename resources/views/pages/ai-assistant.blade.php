<x-layout>
{{-- Hero --}}
<section class="relative py-16 bg-gradient-to-br from-[#0F172A] via-[#1E3A8A] to-[#0F172A] text-white overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-blue-700/10 rounded-full blur-3xl"></div>
    </div>
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-purple-500/20 border border-purple-400/30 text-purple-300 text-sm font-semibold mb-6">
            <i data-lucide="bot" class="w-4 h-4"></i> AI Legal Assistant
        </div>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Gov-AI Legal Intelligence</h1>
        <p class="text-blue-100 max-w-2xl mx-auto">Ask any legal question in plain language — get instant references to applicable Indian laws, circulars, and SOPs.</p>
    </div>
</section>

{{-- Main Chat Interface --}}
<section class="py-16 bg-slate-50 dark:bg-[#020617]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            {{-- Sidebar: Suggestions & Info --}}
            <div class="space-y-6">
                <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 p-5 shadow-sm">
                    <h3 class="font-bold text-primary dark:text-white mb-4 flex items-center gap-2">
                        <i data-lucide="lightbulb" class="w-4 h-4 text-yellow-500"></i> Example Queries
                    </h3>
                    <div class="space-y-2" id="example-queries">
                        @foreach([
                            'Which law applies to online banking fraud?',
                            'What is the SOP for FIR registration in cybercrime?',
                            'How to handle digital evidence?',
                            'Laws related to social media crimes?',
                            'What is ransomware and which IT Act section applies?',
                            'How to investigate phishing attacks?',
                            'What is BNS Section 318?',
                            'Arrest procedures under BNSS 2023?',
                        ] as $eg)
                        <button onclick="fillQuery(this)" data-query="{{ $eg }}"
                            class="w-full text-left px-3 py-2.5 rounded-xl border border-border dark:border-slate-700 text-xs font-medium text-text-muted dark:text-slate-400 hover:border-accent hover:text-accent dark:hover:text-accent hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all">
                            {{ $eg }}
                        </button>
                        @endforeach
                    </div>
                </div>

                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-2xl border border-blue-100 dark:border-blue-800/30 p-5">
                    <h3 class="font-bold text-accent dark:text-blue-400 mb-3 text-sm flex items-center gap-2">
                        <i data-lucide="info" class="w-4 h-4"></i> About This Assistant
                    </h3>
                    <ul class="space-y-2 text-xs text-text-muted dark:text-slate-400">
                        <li class="flex items-start gap-2"><i data-lucide="check" class="w-3 h-3 text-green-500 mt-0.5 flex-shrink-0"></i> Trained on Indian legal corpus</li>
                        <li class="flex items-start gap-2"><i data-lucide="check" class="w-3 h-3 text-green-500 mt-0.5 flex-shrink-0"></i> References IT Act, BNS, BNSS, BSA</li>
                        <li class="flex items-start gap-2"><i data-lucide="check" class="w-3 h-3 text-green-500 mt-0.5 flex-shrink-0"></i> CERT-In & RBI circulars</li>
                        <li class="flex items-start gap-2"><i data-lucide="alert-triangle" class="w-3 h-3 text-yellow-500 mt-0.5 flex-shrink-0"></i> For legal advice, consult your legal cell</li>
                    </ul>
                </div>

                <div class="bg-white dark:bg-slate-900 rounded-2xl border border-border dark:border-slate-800 p-5 shadow-sm">
                    <h3 class="font-bold text-primary dark:text-white mb-4 text-sm">Quick Links</h3>
                    <div class="space-y-2">
                        <a href="{{ route('legal.library') }}" class="flex items-center gap-3 text-xs font-medium text-text-muted dark:text-slate-400 hover:text-accent transition-colors">
                            <i data-lucide="book-open" class="w-4 h-4 text-accent"></i> Legal Library
                        </a>
                        <a href="{{ route('circulars') }}" class="flex items-center gap-3 text-xs font-medium text-text-muted dark:text-slate-400 hover:text-accent transition-colors">
                            <i data-lucide="file-text" class="w-4 h-4 text-accent"></i> Government Circulars
                        </a>
                        <a href="{{ route('search') }}" class="flex items-center gap-3 text-xs font-medium text-text-muted dark:text-slate-400 hover:text-accent transition-colors">
                            <i data-lucide="search" class="w-4 h-4 text-accent"></i> Smart Search
                        </a>
                        <a href="{{ route('cyber.alerts') }}" class="flex items-center gap-3 text-xs font-medium text-text-muted dark:text-slate-400 hover:text-accent transition-colors">
                            <i data-lucide="shield-alert" class="w-4 h-4 text-red-500"></i> Cyber Alerts
                        </a>
                    </div>
                </div>
            </div>

            {{-- Chat Window --}}
            <div class="lg:col-span-3">
                <div class="bg-white dark:bg-slate-900 rounded-3xl border border-border dark:border-slate-800 shadow-[0_10px_40px_-10px_rgba(0,0,0,0.08)] dark:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.4)] overflow-hidden flex flex-col" style="height: 700px;">

                    {{-- Chat Header --}}
                    <div class="flex items-center justify-between px-6 py-4 border-b border-border dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50">
                        <div class="flex items-center gap-3">
                            <div class="relative w-10 h-10 rounded-xl bg-accent flex items-center justify-center text-white shadow-md shadow-accent/20">
                                <i data-lucide="bot" class="w-5 h-5"></i>
                                <span class="absolute -top-1 -right-1 w-3 h-3 bg-green-400 rounded-full border-2 border-white dark:border-slate-900"></span>
                            </div>
                            <div>
                                <div class="font-bold text-primary dark:text-white text-sm">Gov-AI Legal Assistant</div>
                                <div class="text-xs text-green-500 font-medium flex items-center gap-1">
                                    <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span> Online • Ready
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <button onclick="clearChat()" class="text-xs text-text-muted dark:text-slate-500 hover:text-red-500 transition-colors flex items-center gap-1 px-3 py-1.5 rounded-lg border border-border dark:border-slate-700 hover:border-red-200">
                                <i data-lucide="trash-2" class="w-3 h-3"></i> Clear
                            </button>
                        </div>
                    </div>

                    {{-- Chat Messages --}}
                    <div id="chat-messages" class="flex-1 overflow-y-auto p-6 space-y-6">
                        {{-- Welcome Message --}}
                        <div class="flex gap-3" id="welcome-msg">
                            <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center flex-shrink-0 text-white">
                                <i data-lucide="bot" class="w-4 h-4"></i>
                            </div>
                            <div class="flex flex-col items-start max-w-[85%]">
                                <div class="bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 rounded-2xl rounded-tl-none px-5 py-4 text-sm text-primary dark:text-slate-200 shadow-sm">
                                    <div class="font-semibold text-xs text-accent mb-2">Gov-AI Assistant</div>
                                    <p class="mb-3">Namaste! I am the ULGIP AI Legal Assistant, trained on India's legal corpus including:</p>
                                    <ul class="list-disc pl-4 space-y-1 text-slate-600 dark:text-slate-300 mb-3">
                                        <li>IT Act 2000 & Amendments</li>
                                        <li>Bharatiya Nyaya Sanhita (BNS) 2023</li>
                                        <li>BNSS 2023 & BSA 2023</li>
                                        <li>CERT-In, RBI & MHA Circulars</li>
                                        <li>SOPs & Standard Procedures</li>
                                    </ul>
                                    <p>Ask me any legal question or click an example query on the left to get started.</p>
                                </div>
                                <span class="text-[10px] text-slate-400 mt-1 ml-1">{{ now()->format('h:i A') }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Typing indicator (hidden by default) --}}
                    <div id="typing-indicator" class="hidden px-6 pb-2">
                        <div class="flex gap-3 items-center">
                            <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-white flex-shrink-0">
                                <i data-lucide="bot" class="w-4 h-4"></i>
                            </div>
                            <div class="bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 rounded-2xl rounded-tl-none px-4 py-3 shadow-sm">
                                <div class="flex gap-1 items-center">
                                    <div class="w-2 h-2 bg-accent rounded-full animate-bounce" style="animation-delay:0ms"></div>
                                    <div class="w-2 h-2 bg-accent rounded-full animate-bounce" style="animation-delay:150ms"></div>
                                    <div class="w-2 h-2 bg-accent rounded-full animate-bounce" style="animation-delay:300ms"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Chat Input --}}
                    <div class="px-6 py-4 border-t border-border dark:border-slate-800 bg-white dark:bg-slate-900">
                        <div class="flex items-center gap-3 bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-2xl px-4 py-2 shadow-sm focus-within:border-accent focus-within:ring-2 focus-within:ring-accent/20 transition-all">
                            <input type="text" id="chat-input" placeholder="Ask a legal question, e.g. 'What law covers online fraud?'"
                                class="flex-1 bg-transparent border-none focus:ring-0 text-sm py-2 text-primary dark:text-white placeholder-slate-400 outline-none"
                                onkeydown="if(event.key==='Enter' && !event.shiftKey){event.preventDefault(); sendMessage();}">
                            <div class="flex items-center gap-2">
                                <button onclick="sendMessage()" id="send-btn"
                                    class="bg-accent text-white rounded-xl px-4 py-2 text-sm font-semibold hover:bg-blue-700 transition-colors shadow-sm flex items-center gap-2">
                                    <i data-lucide="send" class="w-4 h-4"></i>
                                    <span class="hidden sm:inline">Send</span>
                                </button>
                            </div>
                        </div>
                        <p class="text-[10px] text-slate-400 mt-2 text-center">For emergency cyber crime, call <strong>1930</strong> • This AI is for reference only</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const chatMessages   = document.getElementById('chat-messages');
const chatInput      = document.getElementById('chat-input');
const typingIndicator= document.getElementById('typing-indicator');
const csrfToken      = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function getCurrentTime() {
    return new Date().toLocaleTimeString('en-US', {hour:'2-digit', minute:'2-digit', hour12:true});
}

function appendUserMessage(text) {
    const div = document.createElement('div');
    div.className = 'flex flex-col items-end';
    div.innerHTML = `
        <div class="bg-accent text-white rounded-2xl rounded-tr-none px-5 py-3 max-w-[85%] text-sm shadow-sm">
            <div class="text-[10px] text-blue-200 mb-1">You</div>
            ${escapeHtml(text)}
        </div>
        <span class="text-[10px] text-slate-400 mt-1 mr-1">${getCurrentTime()}</span>
    `;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function appendAIMessage(data) {
    const div = document.createElement('div');
    div.className = 'flex gap-3';
    let provisionsList = data.provisions.map(p => `<li>${escapeHtml(p)}</li>`).join('');
    div.innerHTML = `
        <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center flex-shrink-0 text-white">
            <i data-lucide="bot" class="w-4 h-4"></i>
        </div>
        <div class="flex flex-col items-start max-w-[85%]">
            <div class="bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 rounded-2xl rounded-tl-none px-5 py-4 text-sm text-primary dark:text-slate-200 shadow-sm">
                <div class="font-semibold text-xs text-accent mb-2">Gov-AI Assistant</div>
                <p class="mb-3">The following legal provisions may apply:</p>
                <ul class="list-disc pl-4 mb-4 space-y-1 text-slate-600 dark:text-slate-300">${provisionsList}</ul>
                <p class="font-medium text-slate-700 dark:text-slate-200">Would you like to view related circulars or case laws?</p>
                <div class="flex justify-end mt-3">
    <button onclick="copyResponse(this)"
        class="text-xs px-3 py-1.5 rounded-lg border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-700 transition">
        📋 Copy
    </button>
</div>
                <div class="flex flex-wrap gap-2 mt-3">
                    <a href="{{ route('circulars') }}" class="px-3 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">View Circulars</a>
                    <a href="{{ route('legal.library') }}" class="px-3 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">View Case Laws</a>
                     <a href="{{ route('legal.library') }}" class="px-3 py-1.5 rounded-full border border-blue-200 dark:border-blue-800 text-accent dark:text-blue-400 text-xs font-semibold hover:bg-blue-50 dark:hover:bg-blue-900/30 transition-colors">
    Download SOP
</a>                </div>
            </div>
            <span class="text-[10px] text-slate-400 mt-1 ml-1">${data.timestamp || getCurrentTime()}</span>
        </div>
    `;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    lucide.createIcons();
}

function appendError(message) {
    const div = document.createElement('div');
    div.className = 'flex gap-3';
    div.innerHTML = `
        <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0">
            <i data-lucide="alert-circle" class="w-4 h-4 text-red-500"></i>
        </div>
        <div class="bg-red-50 dark:bg-red-900/20 border border-red-100 dark:border-red-800 rounded-2xl rounded-tl-none px-4 py-3 text-sm text-red-700 dark:text-red-400 max-w-[85%]">
            ${escapeHtml(message)}
        </div>
    `;
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
    lucide.createIcons();
}

function escapeHtml(str) {
    return str.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}

async function sendMessage() {
    const msg = chatInput.value.trim();
    if (!msg) return;
    chatInput.value = '';
    appendUserMessage(msg);
    typingIndicator.classList.remove('hidden');
    chatMessages.scrollTop = chatMessages.scrollHeight;
    try {
        const response = await fetch('{{ route('ai.chat') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: JSON.stringify({ message: msg }),
        });
        const data = await response.json();
        typingIndicator.classList.add('hidden');
        if (response.ok) {
            appendAIMessage(data);
        } else {
            appendError(data.message || 'An error occurred. Please try again.');
        }
    } catch (e) {
        typingIndicator.classList.add('hidden');
        appendError('Network error. Please check your connection and try again.');
    }
}

function fillQuery(btn) {
    chatInput.value = btn.dataset.query;
    chatInput.focus();
}

function clearChat() {
    const messages = chatMessages.querySelectorAll('div:not(#welcome-msg)');
    messages.forEach(m => m.remove());
}
</script>
</x-layout>
function copyResponse(button) {
    const text = button.closest('.bg-slate-50').innerText;

    navigator.clipboard.writeText(text);

    button.innerHTML = "✅ Copied";

    setTimeout(() => {
        button.innerHTML = "📋 Copy";
    }, 2000);
}

@extends('layout.app5')

@section('title', 'Home 5 - MyApp')

@section('content')

{{-- ==================== HERO (FULL-WIDTH GRADIENT) ==================== --}}
<section class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-800 to-indigo-900 text-white">
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-cyan-400 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-indigo-400 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 py-24 md:py-32">
        <div class="max-w-3xl">
            <span class="inline-block bg-white/10 backdrop-blur border border-white/20 text-cyan-200 text-xs font-semibold px-3 py-1 rounded-full mb-5">
                💙 New • Built with Laravel
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Everything You Need to
                <span class="bg-gradient-to-r from-cyan-300 to-blue-200 bg-clip-text text-transparent">
                    Ship Faster.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-blue-100 mb-10 max-w-2xl">
                A modern Laravel starter kit designed to help teams build
                beautiful web applications with confidence — and speed.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/services') }}"
                   class="bg-white text-blue-800 px-7 py-3 rounded-xl font-semibold shadow-lg hover:bg-blue-50 transition">
                    Explore Services
                </a>
                <a href="{{ url('/contact') }}"
                   class="border-2 border-white/60 px-7 py-3 rounded-xl font-semibold hover:bg-white/10 transition">
                    Talk to Us →
                </a>
            </div>

            {{-- Trust row --}}
            <div class="flex flex-wrap items-center gap-8 mt-12 text-sm text-blue-100">
                <div class="flex items-center gap-2">
                    <span class="text-cyan-300">✓</span> No credit card needed
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-cyan-300">✓</span> Free forever plan
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-cyan-300">✓</span> Cancel anytime
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== SIDE-BY-SIDE FEATURES ==================== --}}
<section class="max-w-7xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        {{-- Left: Text --}}
        <div>
            <span class="inline-block bg-blue-50 border border-blue-200 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                🚀 Powerful by design
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mb-5 text-gray-800">
                Built to Help You Move Quickly
            </h2>

            <p class="text-gray-600 mb-8">
                Everything is modular, documented, and ready to customize.
                Focus on your ideas — we've handled the boilerplate.
            </p>

            <div class="space-y-6">
                @foreach ([
                    ['⚡', 'Instant Setup', 'Start in seconds with a clean Laravel scaffold.'],
                    ['🎨', 'Modern UI', 'Beautiful components that feel premium out of the box.'],
                    ['🧩', 'Modular', 'Reusable pieces you can drop into any project.'],
                    ['🔒', 'Secure', 'CSRF, validation, and best practices built in.'],
                ] as [$icon, $title, $desc])
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 rounded-xl bg-blue-100 flex items-center justify-center text-2xl">
                            {{ $icon }}
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 mb-1">{{ $title }}</h3>
                            <p class="text-gray-600 text-sm">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Right: Visual --}}
        <div class="relative">
            <div class="card rounded-3xl shadow-2xl border border-gray-100 p-6">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="w-3 h-3 rounded-full bg-green-400"></span>
                </div>

                {{-- Fake code window --}}
                <div class="bg-gray-900 rounded-2xl p-5 text-xs font-mono text-gray-300 overflow-hidden">
                    <p class="text-cyan-400">&lt;!-- Clean, semantic code --&gt;</p>
                    <p><span class="text-pink-400">&lt;section</span> <span class="text-yellow-300">class</span>=<span class="text-green-400">"hero"</span><span class="text-pink-400">&gt;</span></p>
                    <p class="pl-4"><span class="text-pink-400">&lt;h1&gt;</span>Hello, World<span class="text-pink-400">&lt;/h1&gt;</span></p>
                    <p class="pl-4"><span class="text-pink-400">&lt;a</span> <span class="text-yellow-300">href</span>=<span class="text-green-400">"/start"</span><span class="text-pink-400">&gt;</span>Get Started<span class="text-pink-400">&lt;/a&gt;</span></p>
                    <p><span class="text-pink-400">&lt;/section&gt;</span></p>
                </div>

                {{-- Stat badges --}}
                <div class="grid grid-cols-3 gap-3 mt-5">
                    <div class="bg-blue-50 rounded-xl py-3 text-center">
                        <p class="text-xs text-gray-500">Bundle</p>
                        <p class="font-bold text-blue-700">12 KB</p>
                    </div>
                    <div class="bg-indigo-50 rounded-xl py-3 text-center">
                        <p class="text-xs text-gray-500">Score</p>
                        <p class="font-bold text-indigo-700">100</p>
                    </div>
                    <div class="bg-cyan-50 rounded-xl py-3 text-center">
                        <p class="text-xs text-gray-500">Load</p>
                        <p class="font-bold text-cyan-700">0.4s</p>
                    </div>
                </div>
            </div>

            {{-- Floating tag --}}
            <div class="hidden md:block absolute -top-5 -right-5 bg-white rounded-2xl shadow-xl px-4 py-3 border border-gray-100">
                <p class="text-xs text-gray-500">Stable Release</p>
                <p class="font-bold text-gray-800">v2.0.1 ✓</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== TEAM SECTION ==================== --}}
<section class="bg-gray-50 border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Meet the Team</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                A small, focused team building tools developers love.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @foreach ([
                ['Ayesha Khan', 'Founder & CEO',   'AK', 'from-blue-500 to-indigo-600'],
                ['Bilal Raza',  'Lead Developer',  'BR', 'from-cyan-500 to-blue-600'],
                ['Sara Malik',  'UI/UX Designer',  'SM', 'from-indigo-500 to-purple-600'],
                ['Hassan Ali',  'DevOps Engineer', 'HA', 'from-sky-500 to-cyan-600'],
            ] as [$name, $role, $initials, $gradient])
                <div class="card rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition border border-gray-100 p-6 text-center">
                    <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-br {{ $gradient }} text-white font-bold text-2xl flex items-center justify-center shadow-lg mb-4">
                        {{ $initials }}
                    </div>
                    <h3 class="font-bold text-gray-800">{{ $name }}</h3>
                    <p class="text-sm text-gray-500">{{ $role }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== STATS + TESTIMONIALS COMBO ==================== --}}
<section class="max-w-7xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        {{-- Stats column --}}
        <div class="lg:col-span-1 space-y-6">
            <h2 class="text-3xl font-bold text-gray-800">By the Numbers</h2>
            <p class="text-gray-600">Real results from real teams.</p>

            @foreach ([
                ['2,400+', 'Active users', 'text-blue-700'],
                ['500+',   'Projects',     'text-indigo-600'],
                ['99.9%',  'Uptime',       'text-cyan-600'],
            ] as [$num, $label, $color])
                <div class="card rounded-2xl shadow-md border border-gray-100 p-5">
                    <p class="text-3xl font-extrabold {{ $color }}">{{ $num }}</p>
                    <p class="text-sm text-gray-600 mt-1">{{ $label }}</p>
                </div>
            @endforeach
        </div>

        {{-- Testimonials column --}}
        <div class="lg:col-span-2 space-y-6">
            @foreach ([
                ['Ayesha K.', 'Absolutely loved how easy it was to get started. The code quality is top-notch and the blue theme looks professional.', 'AK'],
                ['Bilal R.',  'Saved us weeks. Everything we needed was already there — clean Blade components and beautiful Tailwind styling.', 'BR'],
            ] as [$name, $quote, $initials])
                <div class="card rounded-2xl shadow-md border border-gray-100 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600 text-white font-bold flex items-center justify-center shadow-md">
                            {{ $initials }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">{{ $name }}</p>
                            <p class="text-xs text-gray-500">Verified Client</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic leading-relaxed">"{{ $quote }}"</p>
                    <div class="mt-3 text-yellow-400 text-sm">★★★★★</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ==================== FINAL CTA STRIP ==================== --}}
<section class="bg-gradient-to-r from-blue-700 to-indigo-800 text-white">
    <div class="max-w-7xl mx-auto px-4 py-16 flex flex-col md:flex-row items-center justify-between gap-8">
        <div>
            <h2 class="text-2xl md:text-3xl font-bold mb-2">Ready to build something great? 💙</h2>
            <p class="text-blue-100">Start your next project with MyApp today.</p>
        </div>
        <div class="flex gap-3 flex-wrap">
            <a href="{{ url('/contact') }}"
               class="bg-white text-blue-800 px-6 py-3 rounded-xl font-semibold shadow-lg hover:bg-blue-50 transition">
                Get Started
            </a>
            <a href="{{ url('/services') }}"
               class="border-2 border-white/60 px-6 py-3 rounded-xl font-semibold hover:bg-white/10 transition">
                View Services
            </a>
        </div>
    </div>
</section>

@endsection
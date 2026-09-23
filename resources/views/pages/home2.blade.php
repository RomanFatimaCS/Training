@extends('layout.app2')

@section('title', 'Home  - MyApp')

@section('content')

{{-- ==================== HERO ==================== --}}
<section class="max-w-7xl mx-auto px-4 py-16 md:py-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        {{-- Left: Text --}}
        <div>
            <span class="inline-block bg-white/70 backdrop-blur border border-orange-200 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full mb-4 shadow-sm">
                ✨ New • Version 2.0
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 bg-gradient-to-r from-orange-500 via-rose-500 to-amber-500 bg-clip-text text-transparent">
                Build Modern Websites, Faster.
            </h1>
            <p class="text-lg text-gray-700 mb-8 max-w-lg">
                A beautifully designed Laravel starter with glassmorphism,
                animated gradients, and clean components out of the box.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/services') }}"
                   class="bg-gradient-to-r from-orange-500 to-rose-500 text-white px-7 py-3 rounded-xl font-semibold shadow-lg hover:from-orange-600 hover:to-rose-600 transition">
                    Get Started
                </a>
                <a href="{{ url('/about') }}"
                   class="card border border-orange-200 px-7 py-3 rounded-xl font-semibold hover:bg-white transition shadow-sm text-orange-700">
                    Learn More →
                </a>
            </div>

            {{-- Small trust row --}}
            <div class="flex items-center gap-6 mt-10 text-sm text-gray-600">
                <div class="flex -space-x-2">
                    <span class="w-8 h-8 rounded-full bg-orange-400 border-2 border-white"></span>
                    <span class="w-8 h-8 rounded-full bg-rose-400 border-2 border-white"></span>
                    <span class="w-8 h-8 rounded-full bg-amber-400 border-2 border-white"></span>
                    <span class="w-8 h-8 rounded-full bg-pink-400 border-2 border-white"></span>
                </div>
                <p><strong class="text-gray-800">2,400+</strong> happy users</p>
            </div>
        </div>

        {{-- Right: Visual card --}}
        <div class="relative">
            <div class="card p-6 rounded-3xl shadow-2xl border border-white/60 backdrop-blur">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="w-3 h-3 rounded-full bg-green-400"></span>
                </div>
                <div class="bg-gradient-to-br from-orange-400 via-rose-500 to-amber-500 rounded-2xl h-56 flex items-center justify-center text-white text-6xl shadow-inner">
                    🚀
                </div>
                <div class="mt-5 grid grid-cols-3 gap-3 text-center">
                    <div class="bg-white/70 rounded-xl py-3 shadow-sm">
                        <p class="text-xs text-gray-500">Speed</p>
                        <p class="font-bold text-gray-800">99%</p>
                    </div>
                    <div class="bg-white/70 rounded-xl py-3 shadow-sm">
                        <p class="text-xs text-gray-500">Uptime</p>
                        <p class="font-bold text-gray-800">100%</p>
                    </div>
                    <div class="bg-white/70 rounded-xl py-3 shadow-sm">
                        <p class="text-xs text-gray-500">Rating</p>
                        <p class="font-bold text-gray-800">4.9★</p>
                    </div>
                </div>
            </div>

            {{-- Floating badge --}}
            <div class="hidden md:block absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl px-5 py-3 border border-orange-100">
                <p class="text-xs text-gray-500">Trusted by</p>
                <p class="font-bold text-gray-800">500+ teams</p>
            </div>
        </div>
    </div>
</section>

{{-- ==================== STATS BAR ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-16">
    <div class="card rounded-3xl shadow-xl border border-white/60 grid grid-cols-2 md:grid-cols-4 divide-x divide-orange-100">
        @foreach ([
            ['10+',  'Years Experience'],
            ['500+', 'Projects Done'],
            ['99%',  'Client Retention'],
            ['24/7', 'Support'],
        ] as [$num, $label])
            <div class="text-center py-8">
                <p class="text-3xl md:text-4xl font-extrabold bg-gradient-to-r from-orange-500 to-rose-500 bg-clip-text text-transparent">
                    {{ $num }}
                </p>
                <p class="text-sm text-gray-600 mt-1">{{ $label }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== FEATURES ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-3">Everything You Need</h2>
        <p class="text-gray-600 max-w-xl mx-auto">
            Packed with carefully crafted features to help you ship beautiful products.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ([
            ['⚡', 'Blazing Fast',   'Optimized for performance from day one.'],
            ['🎨', 'Modern Design',  'Glassmorphism, gradients, and soft shadows.'],
            ['📱', 'Responsive',     'Looks great on every screen size.'],
            ['🔒', 'Secure',         'Built on Laravel\'s robust security.'],
            ['🧩', 'Modular',        'Reusable components you can drop in anywhere.'],
            ['🌍', 'SEO Friendly',   'Semantic HTML and meta tags ready to go.'],
        ] as [$icon, $title, $desc])
            <div class="card p-7 rounded-2xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition border border-white/60">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-rose-500 flex items-center justify-center text-2xl mb-4 shadow-md">
                    {{ $icon }}
                </div>
                <h3 class="text-lg font-bold mb-2">{{ $title }}</h3>
                <p class="text-gray-600 text-sm">{{ $desc }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== TESTIMONIALS ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">What People Say</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach ([
            ['Ayesha K.',  'Loved the design system — clean, modern, and easy to extend.', 'AK'],
            ['Bilal R.',   'Saved me weeks of work. The glassmorphism look is gorgeous.',  'BR'],
            ['Sara M.',    'Perfect starter for any Laravel project. Highly recommended!', 'SM'],
        ] as [$name, $quote, $initials])
            <div class="card p-6 rounded-2xl shadow-lg border border-white/60">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-11 h-11 rounded-full bg-gradient-to-br from-orange-500 to-rose-500 text-white font-bold flex items-center justify-center shadow-md">
                        {{ $initials }}
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">{{ $name }}</p>
                        <p class="text-xs text-gray-500">Verified Client</p>
                    </div>
                </div>
                <p class="text-gray-700 text-sm italic">"{{ $quote }}"</p>
                <div class="mt-3 text-yellow-400 text-sm">★★★★★</div>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== CTA ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="relative overflow-hidden rounded-3xl shadow-2xl bg-gradient-to-r from-orange-500 via-rose-500 to-amber-500 text-white p-10 md:p-16 text-center">
        <div class="absolute -top-16 -right-16 w-56 h-56 bg-white/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-16 -left-16 w-56 h-56 bg-white/20 rounded-full blur-3xl"></div>

        <div class="relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white/90 mb-8 max-w-xl mx-auto">
                Join hundreds of developers building beautiful apps with MyApp today.
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ url('/contact') }}"
                   class="bg-white text-orange-700 px-7 py-3 rounded-xl font-semibold shadow-lg hover:bg-orange-50 transition">
                    Contact Us
                </a>
                <a href="{{ url('/services') }}"
                   class="border-2 border-white/70 px-7 py-3 rounded-xl font-semibold hover:bg-white/10 transition">
                    View Services
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layout.app3')

@section('title', 'Home 3 - MyApp')

@section('content')

{{-- ==================== HERO (SPLIT SCREEN) ==================== --}}
<section class="max-w-7xl mx-auto px-4 pt-16 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

        {{-- Left: Visual mock --}}
        <div class="relative order-2 lg:order-1">
            <div class="card rounded-3xl shadow-2xl border border-white/60 p-4 backdrop-blur">
                {{-- Fake browser bar --}}
                <div class="flex items-center gap-2 px-2 pb-3">
                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="w-3 h-3 rounded-full bg-green-400"></span>
                    <div class="ml-3 flex-1 bg-emerald-50 rounded-md px-3 py-1 text-xs text-emerald-700">
                        https://myapp.test/dashboard
                    </div>
                </div>

                {{-- Fake dashboard --}}
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-5">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <p class="text-xs text-gray-500">Revenue</p>
                            <p class="text-xl font-bold text-emerald-600">$12,450</p>
                            <p class="text-xs text-green-500 mt-1">▲ 18% this week</p>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-sm">
                            <p class="text-xs text-gray-500">Users</p>
                            <p class="text-xl font-bold text-teal-600">3,204</p>
                            <p class="text-xs text-green-500 mt-1">▲ 12% this week</p>
                        </div>
                    </div>

                    {{-- Chart bars --}}
                    <div class="bg-white rounded-xl p-4 shadow-sm mt-4">
                        <p class="text-xs text-gray-500 mb-3">Weekly Activity</p>
                        <div class="flex items-end gap-2 h-24">
                            @foreach ([40, 65, 50, 80, 55, 90, 70] as $h)
                                <div class="flex-1 rounded-t-md bg-gradient-to-t from-emerald-400 to-teal-500"
                                     style="height: {{ $h }}%"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Floating stat card --}}
            <div class="hidden md:block absolute -top-6 -right-6 bg-white rounded-2xl shadow-xl px-5 py-4 border border-emerald-100">
                <p class="text-xs text-gray-500">Active Now</p>
                <p class="font-bold text-emerald-700 text-lg">1,204 🟢</p>
            </div>

            {{-- Floating badge --}}
            <div class="hidden md:block absolute -bottom-6 -left-6 bg-gradient-to-r from-emerald-500 to-teal-600 text-white rounded-2xl shadow-xl px-5 py-3">
                <p class="text-xs opacity-90">Uptime</p>
                <p class="font-bold">99.99%</p>
            </div>
        </div>

        {{-- Right: Text --}}
        <div class="order-1 lg:order-2">
            <span class="inline-flex items-center gap-2 bg-white/70 backdrop-blur border border-emerald-200 text-emerald-700 text-xs font-semibold px-3 py-1 rounded-full mb-4 shadow-sm">
                🌿 Smarter • Faster • Greener
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 bg-gradient-to-r from-emerald-500 via-green-500 to-teal-500 bg-clip-text text-transparent">
                Grow Your Business With Confidence.
            </h1>

            <p class="text-lg text-gray-700 mb-8 max-w-lg">
                A powerful Laravel toolkit built for founders, teams, and
                creators who want to ship elegant, sustainable products fast.
            </p>

            {{-- Feature list --}}
            <ul class="space-y-3 mb-8">
                @foreach ([
                    'Clean, modern, and accessible UI out of the box',
                    'Blazing fast performance & SEO-ready',
                    'Reusable components with green design tokens',
                    'Zero-config setup with Tailwind & Blade',
                ] as $item)
                    <li class="flex items-start gap-3 text-gray-700">
                        <span class="mt-1 w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs font-bold">✓</span>
                        {{ $item }}
                    </li>
                @endforeach
            </ul>

            <div class="flex flex-wrap gap-4">
                <a href="{{ url('/services') }}"
                   class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-7 py-3 rounded-xl font-semibold shadow-lg hover:from-emerald-600 hover:to-teal-700 transition">
                    Explore Services
                </a>
                <a href="{{ url('/contact') }}"
                   class="card border border-emerald-200 px-7 py-3 rounded-xl font-semibold hover:bg-white transition shadow-sm text-emerald-700">
                    Talk to Us
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ==================== PROCESS / TIMELINE ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-3">How It Works</h2>
        <p class="text-gray-600 max-w-xl mx-auto">
            Four simple steps from idea to a fully launched, green website.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
        @foreach ([
            ['01', 'Discover',   'We learn about your goals, brand, and audience.'],
            ['02', 'Design',     'We craft a fresh, eco-inspired UI tailored to you.'],
            ['03', 'Develop',    'We build using Laravel, Tailwind, and clean code.'],
            ['04', 'Deploy',     'We launch, monitor, and help you grow fast.'],
        ] as [$step, $title, $desc])
            <div class="card p-6 rounded-2xl shadow-lg border border-white/60 relative">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white font-bold flex items-center justify-center shadow-md mb-4">
                    {{ $step }}
                </div>
                <h3 class="text-lg font-bold mb-2">{{ $title }}</h3>
                <p class="text-gray-600 text-sm">{{ $desc }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== PRICING ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-3">Simple, Honest Pricing</h2>
        <p class="text-gray-600 max-w-xl mx-auto">
            Choose the plan that fits your journey. No hidden fees.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        @php
            $plans = [
                [
                    'name' => 'Starter',
                    'price' => '$9',
                    'desc' => 'Perfect for personal projects.',
                    'features' => ['1 project', 'Community support', 'Basic analytics', '1 GB storage'],
                    'highlight' => false,
                ],
                [
                    'name' => 'Pro',
                    'price' => '$29',
                    'desc' => 'Best for growing teams.',
                    'features' => ['10 projects', 'Priority support', 'Advanced analytics', '50 GB storage', 'Custom domain'],
                    'highlight' => true,
                ],
                [
                    'name' => 'Business',
                    'price' => '$99',
                    'desc' => 'For companies that need it all.',
                    'features' => ['Unlimited projects', '24/7 support', 'Full analytics suite', '1 TB storage', 'SSO & SAML'],
                    'highlight' => false,
                ],
            ];
        @endphp

        @foreach ($plans as $plan)
            <div class="card rounded-3xl shadow-lg border border-white/60 p-8 flex flex-col
                        {{ $plan['highlight'] ? 'ring-2 ring-emerald-500 scale-105 shadow-2xl' : '' }}">

                @if ($plan['highlight'])
                    <span class="self-start mb-3 text-xs font-bold bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-3 py-1 rounded-full">
                        MOST POPULAR
                    </span>
                @endif

                <h3 class="text-xl font-bold mb-1">{{ $plan['name'] }}</h3>
                <p class="text-sm text-gray-500 mb-4">{{ $plan['desc'] }}</p>

                <div class="flex items-end gap-1 mb-6">
                    <span class="text-4xl font-extrabold bg-gradient-to-r from-emerald-500 to-teal-500 bg-clip-text text-transparent">
                        {{ $plan['price'] }}
                    </span>
                    <span class="text-gray-500 mb-1">/month</span>
                </div>

                <ul class="space-y-3 mb-8 flex-1">
                    @foreach ($plan['features'] as $feature)
                        <li class="flex items-center gap-3 text-sm text-gray-700">
                            <span class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center text-xs font-bold">✓</span>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>

                <a href="{{ url('/contact') }}"
                   class="block text-center px-6 py-3 rounded-xl font-semibold transition shadow-md
                          {{ $plan['highlight']
                                ? 'bg-gradient-to-r from-emerald-500 to-teal-600 text-white hover:from-emerald-600 hover:to-teal-700'
                                : 'bg-white border border-emerald-200 text-emerald-700 hover:bg-emerald-50' }}">
                    Choose {{ $plan['name'] }}
                </a>
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== FAQ ==================== --}}
<section class="max-w-4xl mx-auto px-4 pb-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">Frequently Asked Questions</h2>

    <div class="space-y-4">
        @foreach ([
            ['Is this starter suitable for production?', 'Absolutely. It uses clean, semantic HTML, Tailwind CSS, and Laravel Blade — ready for real projects.'],
            ['Can I customize the green theme?', 'Yes. All colors are defined via Tailwind utility classes. Swap emerald/teal for any palette in minutes.'],
            ['Do I need npm or a build step?', 'No. Tailwind is loaded from CDN for this starter. For production, we recommend compiling via Vite.'],
            ['Is support included?', 'Community support is free. Priority support is available in the Pro and Business plans.'],
        ] as [$q, $a])
            <details class="card rounded-2xl shadow-md border border-white/60 p-5 group">
                <summary class="cursor-pointer font-semibold text-gray-800 flex justify-between items-center">
                    {{ $q }}
                    <span class="text-emerald-600 group-open:rotate-180 transition">▾</span>
                </summary>
                <p class="mt-3 text-gray-600 text-sm leading-relaxed">{{ $a }}</p>
            </details>
        @endforeach
    </div>
</section>

{{-- ==================== NEWSLETTER CTA ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="relative overflow-hidden rounded-3xl shadow-2xl bg-gradient-to-r from-emerald-500 via-green-500 to-teal-500 text-white p-10 md:p-14 text-center">
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-white/20 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Stay in the Loop 🌿</h2>
            <p class="text-white/90 mb-8">
                Get product updates, design tips, and growth ideas — straight to your inbox.
            </p>

            <form action="{{ url('/contact') }}" method="POST"
                  class="flex flex-col sm:flex-row gap-3 bg-white/15 backdrop-blur p-2 rounded-2xl border border-white/30">
                @csrf
                <input type="email" name="email" required placeholder="you@example.com"
                       class="flex-1 bg-transparent placeholder-white/70 text-white px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-white/50">
                <button type="submit"
                        class="bg-white text-emerald-700 font-semibold px-6 py-3 rounded-xl hover:bg-emerald-50 transition shadow-md">
                    Subscribe
                </button>
            </form>

            <p class="text-xs text-white/70 mt-3">No spam. Unsubscribe anytime.</p>
        </div>
    </div>
</section>

@endsection
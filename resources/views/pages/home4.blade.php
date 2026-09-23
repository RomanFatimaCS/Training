@extends('layout.app4')

@section('title', 'Home 4 - MyApp')

@section('content')

{{-- ==================== HERO (CENTERED + EMAIL CAPTURE) ==================== --}}
<section class="max-w-4xl mx-auto px-4 pt-20 pb-16 text-center">
    <span class="inline-block bg-amber-50 border border-amber-200 text-amber-800 text-xs font-semibold px-3 py-1 rounded-full mb-5">
        🤎 Trusted by 2,400+ makers
    </span>

    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 text-gray-800">
        The Simpler Way to
        <span class="bg-gradient-to-r from-amber-700 to-orange-600 bg-clip-text text-transparent">
            Launch Your Ideas.
        </span>
    </h1>

    <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">
        Everything you need to design, build, and ship beautiful Laravel
        websites — all in one clean starter kit.
    </p>

    {{-- Email capture --}}
    <form action="{{ url('/contact') }}" method="POST"
          class="max-w-xl mx-auto flex flex-col sm:flex-row gap-3 bg-white border border-gray-200 rounded-2xl p-2 shadow-lg">
        @csrf
        <input type="email" name="email" required placeholder="you@example.com"
               class="flex-1 bg-transparent px-4 py-3 rounded-xl text-gray-800 focus:outline-none focus:ring-2 focus:ring-amber-500">
        <button type="submit"
                class="bg-amber-700 text-white font-semibold px-6 py-3 rounded-xl hover:bg-amber-800 transition shadow-md whitespace-nowrap">
            Get Started Free
        </button>
    </form>

    <p class="text-xs text-gray-500 mt-3">No credit card required • Free forever plan</p>

    {{-- Small trust row --}}
    <div class="flex items-center justify-center gap-6 mt-10 text-sm text-gray-600 flex-wrap">
        <div class="flex items-center gap-2">
            <span class="text-green-500">✓</span> 14-day free trial
        </div>
        <div class="flex items-center gap-2">
            <span class="text-green-500">✓</span> Cancel anytime
        </div>
        <div class="flex items-center gap-2">
            <span class="text-green-500">✓</span> 24/7 support
        </div>
    </div>
</section>

{{-- ==================== LOGOS STRIP ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <p class="text-center text-xs uppercase tracking-widest text-gray-400 mb-6">
        Trusted by teams at
    </p>
    <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center opacity-70">
        @foreach (['Acme Corp', 'Northwind', 'Globex', 'Initech', 'Umbrella'] as $brand)
            <div class="text-center text-lg font-bold text-gray-500 tracking-wide">
                {{ $brand }}
            </div>
        @endforeach
    </div>
</section>

{{-- ==================== BENTO GRID FEATURES ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">A Toolkit That Just Works</h2>
        <p class="text-gray-600 max-w-xl mx-auto">
            Every feature you need, thoughtfully arranged.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-6 gap-5">

        {{-- Big card 1 --}}
        <div class="md:col-span-4 card rounded-3xl shadow-lg border border-gray-100 p-8 relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-amber-100 rounded-full blur-2xl"></div>
            <div class="relative z-10">
                <div class="w-12 h-12 rounded-xl bg-amber-700 text-white flex items-center justify-center text-2xl mb-4 shadow-md">
                    🚀
                </div>
                <h3 class="text-xl font-bold mb-2 text-gray-800">Blazing-Fast Performance</h3>
                <p class="text-gray-600 text-sm mb-6 max-w-md">
                    Optimized assets, lazy loading, and semantic HTML for
                    a perfect Lighthouse score every time.
                </p>

                {{-- Mini metric bars --}}
                <div class="space-y-3">
                    @foreach ([
                        ['Performance', 98, 'amber'],
                        ['Accessibility', 100, 'orange'],
                        ['SEO', 100, 'yellow'],
                    ] as [$label, $score, $color])
                        <div>
                            <div class="flex justify-between text-xs text-gray-600 mb-1">
                                <span>{{ $label }}</span>
                                <span class="font-semibold text-gray-800">{{ $score }}</span>
                            </div>
                            <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-amber-500 to-orange-600 rounded-full"
                                     style="width: {{ $score }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Small card 1 --}}
        <div class="md:col-span-2 card rounded-3xl shadow-lg border border-gray-100 p-6">
            <div class="w-12 h-12 rounded-xl bg-amber-100 flex items-center justify-center text-2xl mb-4">
                🎨
            </div>
            <h3 class="text-lg font-bold mb-2 text-gray-800">Beautiful UI</h3>
            <p class="text-gray-600 text-sm">Clean, modern design system with soft shadows and rounded corners.</p>
        </div>

        {{-- Small card 2 --}}
        <div class="md:col-span-2 card rounded-3xl shadow-lg border border-gray-100 p-6">
            <div class="w-12 h-12 rounded-xl bg-orange-100 flex items-center justify-center text-2xl mb-4">
                🔒
            </div>
            <h3 class="text-lg font-bold mb-2 text-gray-800">Secure</h3>
            <p class="text-gray-600 text-sm">Built on Laravel's robust security layer with CSRF protection.</p>
        </div>

        {{-- Medium card --}}
        <div class="md:col-span-4 card rounded-3xl shadow-lg border border-gray-100 p-8">
            <div class="flex items-start justify-between gap-4 flex-wrap">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center text-2xl mb-4">
                        📱
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Fully Responsive</h3>
                    <p class="text-gray-600 text-sm max-w-sm">
                        From mobile to 4K — every layout adapts perfectly.
                    </p>
                </div>
                <div class="flex items-end gap-2 mt-4 md:mt-0">
                    <div class="w-10 h-16 bg-gray-200 rounded-md"></div>
                    <div class="w-14 h-24 bg-gray-300 rounded-md"></div>
                    <div class="w-20 h-28 bg-amber-700 rounded-md"></div>
                    <div class="w-24 h-32 bg-gray-400 rounded-md"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== COMPARISON TABLE ==================== --}}
<section class="max-w-5xl mx-auto px-4 pb-20">
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-3 text-gray-800">Why Choose MyApp?</h2>
        <p class="text-gray-600 max-w-xl mx-auto">See how we compare to the alternatives.</p>
    </div>

    <div class="card rounded-3xl shadow-lg border border-gray-100 overflow-hidden">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-gray-50 text-gray-700">
                    <th class="text-left px-6 py-4 font-semibold">Feature</th>
                    <th class="px-6 py-4 font-semibold text-amber-700">MyApp</th>
                    <th class="px-6 py-4 font-semibold text-gray-500">Others</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ([
                    ['Modern UI', 'included', 'partial'],
                    ['Blazing Performance', 'included', 'no'],
                    ['24/7 Support', 'included', 'no'],
                    ['Free Updates', 'included', 'partial'],
                    ['Custom Brown Navbar', 'included', 'no'],
                ] as [$feature, $ours, $theirs])
                    <tr>
                        <td class="px-6 py-4 text-gray-700">{{ $feature }}</td>
                        <td class="px-6 py-4 text-center">
                            @if ($ours === 'included')
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-green-100 text-green-600 font-bold">✓</span>
                            @elseif ($ours === 'partial')
                                <span class="text-yellow-500 font-bold">~</span>
                            @else
                                <span class="text-red-400 font-bold">✕</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($theirs === 'included')
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-green-100 text-green-600 font-bold">✓</span>
                            @elseif ($theirs === 'partial')
                                <span class="text-yellow-500 font-bold">~</span>
                            @else
                                <span class="text-red-400 font-bold">✕</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

{{-- ==================== BIG CTA ==================== --}}
<section class="max-w-7xl mx-auto px-4 pb-20">
    <div class="relative overflow-hidden rounded-3xl shadow-2xl bg-gradient-to-br from-amber-700 via-orange-700 to-amber-800 text-white p-10 md:p-16 text-center">
        <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Start Building Today 🤎</h2>
            <p class="text-white/90 mb-8">
                Join thousands of developers shipping beautiful, modern web applications.
            </p>

            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ url('/services') }}"
                   class="bg-white text-amber-800 px-7 py-3 rounded-xl font-semibold shadow-lg hover:bg-amber-50 transition">
                    Explore Services
                </a>
                <a href="{{ url('/contact') }}"
                   class="border-2 border-white/70 px-7 py-3 rounded-xl font-semibold hover:bg-white/10 transition">
                    Contact Sales
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
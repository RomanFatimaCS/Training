<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Website')</title>

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html { scroll-behavior: smooth; }
        .nav-link.active { color: #047857; font-weight: 700; }

        /* ===== Aesthetic animated green gradient background ===== */
        body {
            background: linear-gradient(-45deg, #ecfdf5, #d1fae5, #ccfbf1, #f0fdf4);
            background-size: 400% 400%;
            animation: gradientShift 18s ease infinite;
        }
        @keyframes gradientShift {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* ===== Floating soft blobs ===== */
        .blob {
            position: fixed;
            border-radius: 9999px;
            filter: blur(90px);
            opacity: 0.55;
            z-index: -1;
            pointer-events: none;
        }
        .blob-1 { width: 380px; height: 380px; background: #86efac; top: -120px; left: -120px; animation: float1 14s ease-in-out infinite; }
        .blob-2 { width: 420px; height: 420px; background: #17e08d; bottom: -140px; right: -140px; animation: float2 16s ease-in-out infinite; }
        .blob-3 { width: 300px; height: 300px; background: #5eeabb; top: 40%; left: 55%; animation: float1 20s ease-in-out infinite; }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            50%      { transform: translate(40px, 30px); }
        }
        @keyframes float2 {
            0%, 100% { transform: translate(0, 0); }
            50%      { transform: translate(-40px, -30px); }
        }

        /* ===== Green glassy navbar ===== */
        .green-nav {
            background: linear-gradient(90deg, #d1fae5 0%, #a7f3d0 50%, #99f6e4 100%);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 4px 20px rgba(16, 185, 129, 0.18);
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
        }

        /* ===== Frosted card ===== */
        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(6px);
        }
    </style>
</head>
<body class="text-gray-800 min-h-screen flex flex-col">

    {{-- Floating background blobs --}}
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    {{-- ==================== NAVBAR (GREEN) ==================== --}}
    <nav class="green-nav sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <span class="w-8 h-8 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-lg flex items-center justify-center text-white font-bold shadow-md">M</span>
                    <span class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">MyApp</span>
                </a>

                {{-- Desktop Links --}}
                <ul class="hidden md:flex space-x-8">
                   
                    </li>
                    <li>
                        <a href="{{ url('/home2') }}"
                           class="nav-link text-emerald-900 hover:text-emerald-700 transition {{ request()->is('home2') ? 'active' : '' }}">
                            Home 2
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}"
                           class="nav-link text-emerald-900 hover:text-emerald-700 transition {{ request()->is('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}"
                           class="nav-link text-emerald-900 hover:text-emerald-700 transition {{ request()->is('services') ? 'active' : '' }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"
                           class="nav-link text-emerald-900 hover:text-emerald-700 transition {{ request()->is('contact') ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                </ul>

                {{-- Auth Buttons --}}
                <div class="hidden md:flex items-center space-x-3">
                    @auth
                        <span class="text-sm text-emerald-900">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-emerald-900 hover:text-red-700 transition">Logout</button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="text-emerald-900 hover:text-emerald-700 transition font-medium">Login</a>
                        <a href="{{ url('/register') }}"
                           class="bg-gradient-to-r from-emerald-500 to-teal-600 text-white px-4 py-2 rounded-lg hover:from-emerald-600 hover:to-teal-700 transition shadow-md">
                            Register
                        </a>
                    @endauth
                </div>

                {{-- Mobile Button --}}
                <button id="menuBtn" class="md:hidden text-emerald-900 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="hidden md:hidden green-nav border-t border-white/50">
            <ul class="px-4 py-3 space-y-2">
                <li><a href="{{ url('/') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">Home</a></li>
                <li><a href="{{ url('/home2') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">Home 2</a></li>
                <li><a href="{{ url('/about') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">About</a></li>
                <li><a href="{{ url('/services') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">Services</a></li>
                <li><a href="{{ url('/contact') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">Contact</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left py-2 text-red-700">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}" class="block py-2 text-emerald-900 hover:text-emerald-700">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="block py-2 text-emerald-700 font-semibold">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    {{-- ==================== PAGE CONTENT ==================== --}}
    <main class="flex-1 relative z-10">
        @yield('content')
    </main>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="bg-gradient-to-r from-emerald-900 via-green-950 to-teal-900 text-emerald-100 mt-16 relative z-10">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white text-lg font-bold mb-3">MyApp</h3>
                <p class="text-sm">Building simple, elegant web experiences with Laravel.</p>
            </div>
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/home2') }}" class="hover:text-white">Home 2</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Contact</h3>
                <p class="text-sm">📍 123 Main Street</p>
                <p class="text-sm">📧 hello@myapp.com</p>
                <p class="text-sm">📞 +1 234 567 890</p>
            </div>
        </div>
        <div class="border-t border-emerald-800 py-4 text-center text-sm">
            © {{ date('Y') }} MyApp. All rights reserved.
        </div>
    </footer>

    {{-- Mobile Menu Script --}}
    <script>
        document.getElementById('menuBtn')?.addEventListener('click', function () {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
    </script>

</body>
</html>
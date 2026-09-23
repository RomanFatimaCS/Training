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
        .nav-link.active { color: #2563eb; font-weight: 600; }

        /* ===== Aesthetic animated gradient background ===== */
        body {
            background: linear-gradient(-45deg, #eef2ff, #fce7f3, #ecfeff, #fef3c7);
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
            filter: blur(80px);
            opacity: 0.55;
            z-index: -1;
            pointer-events: none;
        }
        .blob-1 {
            width: 380px; height: 380px;
            background: #a5b4fc;
            top: -120px; left: -120px;
            animation: float1 14s ease-in-out infinite;
        }
        .blob-2 {
            width: 420px; height: 420px;
            background: #f9a8d4;
            bottom: -140px; right: -140px;
            animation: float2 16s ease-in-out infinite;
        }
        .blob-3 {
            width: 300px; height: 300px;
            background: #67e8f9;
            top: 40%; left: 55%;
            animation: float1 20s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            50%      { transform: translate(40px, 30px); }
        }
        @keyframes float2 {
            0%, 100% { transform: translate(0, 0); }
            50%      { transform: translate(-40px, -30px); }
        }

        /* ===== Glassy navbar ===== */
        .glass-nav {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        /* ===== Card glow ===== */
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

    {{-- ==================== NAVBAR ==================== --}}
    <nav class="glass-nav shadow-md sticky top-0 z-50 border-b border-white/40">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <span class="w-8 h-8 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center text-white font-bold shadow-md">AB</span>
                    <span class="text-xl font-bold bg-gradient-to-r from-blue-600 to-pink-500 bg-clip-text text-transparent">ApexBooks</span>
                </a>

                {{-- Desktop Links --}}
                <ul class="hidden md:flex space-x-8">
                    <li>
                        <a href="{{ url('/') }}"
                           class="nav-link text-gray-700 hover:text-blue-600 transition {{ request()->is('/') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}"
                           class="nav-link text-gray-700 hover:text-blue-600 transition {{ request()->is('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}"
                           class="nav-link text-gray-700 hover:text-blue-600 transition {{ request()->is('services') ? 'active' : '' }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"
                           class="nav-link text-gray-700 hover:text-blue-600 transition {{ request()->is('contact') ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                </ul>

                {{-- Auth Buttons --}}
                <div class="hidden md:flex items-center space-x-3">
                    @auth
                        <span class="text-sm text-gray-600">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-red-600 transition">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="text-gray-700 hover:text-blue-600 transition">Login</a>
                        <a href="{{ url('/register') }}"
                           class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-lg hover:from-blue-700 hover:to-indigo-700 transition shadow-md">
                            Register
                        </a>
                    @endauth
                </div>

                {{-- Mobile Button --}}
                <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="hidden md:hidden glass-nav border-t border-white/40">
            <ul class="px-4 py-3 space-y-2">
                <li><a href="{{ url('/') }}" class="block py-2 text-gray-700 hover:text-blue-600">Home</a></li>
                <li><a href="{{ url('/about') }}" class="block py-2 text-gray-700 hover:text-blue-600">About</a></li>
                <li><a href="{{ url('/services') }}" class="block py-2 text-gray-700 hover:text-blue-600">Services</a></li>
                <li><a href="{{ url('/contact') }}" class="block py-2 text-gray-700 hover:text-blue-600">Contact</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left py-2 text-red-600">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}" class="block py-2 text-gray-700 hover:text-blue-600">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="block py-2 text-blue-600 font-semibold">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    {{-- ==================== PAGE CONTENT ==================== --}}
    <main class="flex-1 relative z-10">
        @yield('content')
    </main>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="bg-gradient-to-r from-gray-900 via-indigo-950 to-gray-900 text-gray-300 mt-16 relative z-10">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white text-lg font-bold mb-3">ApexBooks</h3>
                <p class="text-sm">Building simple, elegant web experiences with Laravel.</p>
            </div>
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white">About</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
            </div>
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Contact</h3>
                <p class="text-sm">📍 123 Main Street</p>
                <p class="text-sm">📧 hello@myapp.com</p>
                <p class="text-sm">📞 +1 234 567 890</p>
            </div>
        </div>
        <div class="border-t border-gray-800 py-4 text-center text-sm">
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
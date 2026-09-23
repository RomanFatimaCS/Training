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

        /* Active link = light amber so it pops on brown */
        .nav-link.active { color: #fcd34d; font-weight: 700; }

        /* Clean, neutral page background */
        body {
            background: #f9fafb;
        }

        /* Brown navbar — the ONLY brown element */
        .brown-nav {
            background: linear-gradient(90deg, #78350f 0%, #92400e 50%, #7c2d12 100%);
            box-shadow: 0 4px 18px rgba(120, 53, 15, 0.25);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Plain white card */
        .card {
            background: #ffffff;
        }
    </style>
</head>
<body class="text-gray-800 min-h-screen flex flex-col">

    {{-- ==================== NAVBAR (BROWN) ==================== --}}
    <nav class="brown-nav sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <span class="w-8 h-8 bg-amber-400 rounded-lg flex items-center justify-center text-amber-900 font-bold shadow-md">M</span>
                    <span class="text-xl font-bold text-amber-50">MyApp</span>
                </a>

                {{-- Desktop Links --}}
                <ul class="hidden md:flex space-x-7">
                   
                    <li>
                        <a href="{{ url('/home2') }}"
                           class="nav-link text-amber-100 hover:text-amber-300 transition {{ request()->is('home2') ? 'active' : '' }}">
                            Home 2
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/home3') }}"
                           class="nav-link text-amber-100 hover:text-amber-300 transition {{ request()->is('home3') ? 'active' : '' }}">
                            Home 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}"
                           class="nav-link text-amber-100 hover:text-amber-300 transition {{ request()->is('about') ? 'active' : '' }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/services') }}"
                           class="nav-link text-amber-100 hover:text-amber-300 transition {{ request()->is('services') ? 'active' : '' }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}"
                           class="nav-link text-amber-100 hover:text-amber-300 transition {{ request()->is('contact') ? 'active' : '' }}">
                            Contact
                        </a>
                    </li>
                </ul>

                {{-- Auth Buttons --}}
                <div class="hidden md:flex items-center space-x-3">
                    @auth
                        <span class="text-sm text-amber-100">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-amber-100 hover:text-red-300 transition">Logout</button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="text-amber-100 hover:text-amber-300 transition font-medium">Login</a>
                        <a href="{{ url('/register') }}"
                           class="bg-amber-400 text-amber-900 px-4 py-2 rounded-lg font-semibold hover:bg-amber-300 transition shadow-md">
                            Register
                        </a>
                    @endauth
                </div>

                {{-- Mobile Button --}}
                <button id="menuBtn" class="md:hidden text-amber-100 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu" class="hidden md:hidden brown-nav border-t border-white/10">
            <ul class="px-4 py-3 space-y-2">
                <li><a href="{{ url('/') }}"         class="block py-2 text-amber-100 hover:text-amber-300">Home</a></li>
                <li><a href="{{ url('/home2') }}"    class="block py-2 text-amber-100 hover:text-amber-300">Home 2</a></li>
                <li><a href="{{ url('/home3') }}"    class="block py-2 text-amber-100 hover:text-amber-300">Home 3</a></li>
                <li><a href="{{ url('/about') }}"    class="block py-2 text-amber-100 hover:text-amber-300">About</a></li>
                <li><a href="{{ url('/services') }}" class="block py-2 text-amber-100 hover:text-amber-300">Services</a></li>
                <li><a href="{{ url('/contact') }}"  class="block py-2 text-amber-100 hover:text-amber-300">Contact</a></li>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left py-2 text-red-300">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}"    class="block py-2 text-amber-100 hover:text-amber-300">Login</a></li>
                    <li><a href="{{ url('/register') }}" class="block py-2 text-amber-300 font-semibold">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    {{-- ==================== PAGE CONTENT ==================== --}}
    <main class="flex-1">
        @yield('content')
    </main>

    {{-- ==================== FOOTER (NEUTRAL GRAY) ==================== --}}
    <footer class="bg-gray-900 text-gray-300 mt-16">
        <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white text-lg font-bold mb-3">MyApp</h3>
                <p class="text-sm">Building simple, elegant web experiences with Laravel.</p>
            </div>
            <div>
                <h3 class="text-white text-lg font-bold mb-3">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/') }}"         class="hover:text-white">Home</a></li>
                    <li><a href="{{ url('/home2') }}"    class="hover:text-white">Home 2</a></li>
                    <li><a href="{{ url('/home3') }}"    class="hover:text-white">Home 3</a></li>
                    <li><a href="{{ url('/about') }}"    class="hover:text-white">About</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-white">Services</a></li>
                    <li><a href="{{ url('/contact') }}"  class="hover:text-white">Contact</a></li>
                </ul>
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
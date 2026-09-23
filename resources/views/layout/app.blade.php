<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ApexBooks')</title>

    <style>
        /* ===== RESET ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #faf5ff;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main { flex: 1; }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #e9d5ff;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(168, 85, 247, 0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        /* ===== BRAND (LEFT) ===== */
        .brand {
            color: #6b21a8;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .brand:hover { color: #a855f7; }

        /* ===== NAV LINKS (CENTER) ===== */
        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
            justify-content: center;
            flex: 1;
        }

        .nav-links a {
            color: #7e22ce;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover { color: #a855f7; }

        /* ===== AUTH BUTTONS (RIGHT) ===== */
        .auth-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-shrink: 0;
        }

        .btn-signin {
            color: #6b21a8;
            text-decoration: none;
            padding: 9px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            border: 2px solid #6b21a8;
            transition: all 0.3s;
        }

        .btn-signin:hover {
            background: #6b21a8;
            color: #f3e8ff;
        }

        .btn-signup {
            background: #6b21a8;
            color: #f3e8ff;
            text-decoration: none;
            padding: 9px 22px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            border: 2px solid #6b21a8;
            transition: all 0.3s;
        }

        .btn-signup:hover {
            background: #a855f7;
            border-color: #a855f7;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(168, 85, 247, 0.35);
        }

        /* ===== FOOTER ===== */
        footer {
            background: #e9d5ff;
            color: #6b21a8;
            text-align: center;
            padding: 22px 0;
            font-size: 14px;
            box-shadow: 0 -2px 10px rgba(168, 85, 247, 0.15);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .nav-container {
                flex-wrap: wrap;
                justify-content: center;
            }
            .nav-links { gap: 18px; }
        }

        @media (max-width: 600px) {
            .nav-container {
                flex-direction: column;
                gap: 12px;
            }
            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .auth-buttons { width: 100%; justify-content: center; }
        }
    </style>
</head>
<body>

    <!-- ================= HEADER ================= -->
    <header class="navbar">
        <div class="nav-container">

            <!-- LEFT: Brand -->
            <a href="{{ url('/home') }}" class="brand">📚 ApexBooks</a>

            <!-- CENTER: Nav Links -->
            <ul class="nav-links">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/home1') }}">About</a></li>
                <li><a href="{{ url('/home2') }}">Services</a></li>
                <li><a href="{{ url('/home3') }}">Contact</a></li>
            </ul>

            <!-- RIGHT: Sign In / Sign Up -->
            <div class="auth-buttons">
                <a href="#" class="btn-signin">Sign In</a>
                <a href="#" class="btn-signup">Sign Up</a>
            </div>

        </div>
    </header>

    <!-- ================= MAIN CONTENT ================= -->
    <main>
        @yield('content')
    </main>


    <!-- ================= FOOTER ================= -->
    <footer>
        <p>&copy; {{ date('Y') }} ApexBooks. All Rights Reserved.</p>
    </footer>

</body>
</html>
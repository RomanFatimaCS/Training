<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - ApexBooks</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #faf5ff; color: #333; line-height: 1.6; }

        /* ===== STYLISH NAVBAR ===== */
        .navbar { background: #e9d5ff; padding: 15px 0; box-shadow: 0 2px 10px rgba(168, 85, 247, 0.15); position: sticky; top: 0; z-index: 100; }
        .nav-container { max-width: 1300px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; gap: 20px; }
        .brand { color: #6b21a8; font-size: 22px; font-weight: bold; text-decoration: none; flex-shrink: 0; transition: color 0.3s; }
        .brand:hover { color: #a855f7; }

        .nav-links { list-style: none; display: flex; gap: 8px; justify-content: center; flex: 1; }
        .nav-links li { position: relative; }
        .nav-links a {
            color: #7e22ce; text-decoration: none; font-size: 15px; font-weight: 600;
            padding: 8px 16px; border-radius: 50px; position: relative;
            display: inline-block; transition: all 0.3s ease; letter-spacing: 0.3px;
        }
        .nav-links a::after {
            content: ''; position: absolute; bottom: 4px; left: 50%; width: 0;
            height: 2px; background: linear-gradient(90deg, #a855f7, #ec4899);
            transition: all 0.3s ease; transform: translateX(-50%); border-radius: 2px;
        }
        .nav-links a:hover { color: #6b21a8; background: rgba(168, 85, 247, 0.1); transform: translateY(-2px); }
        .nav-links a:hover::after { width: 60%; }
        .nav-links a.active {
            color: #fff; background: linear-gradient(135deg, #6b21a8, #a855f7);
            box-shadow: 0 6px 18px rgba(168, 85, 247, 0.4);
        }
        .nav-links a.active::after { display: none; }
        .nav-links a.active:hover { transform: translateY(-2px); box-shadow: 0 8px 22px rgba(168, 85, 247, 0.55); }

        .auth-buttons { display: flex; gap: 10px; align-items: center; flex-shrink: 0; }
        .btn-signin {
            color: #6b21a8; text-decoration: none; padding: 9px 20px; border-radius: 50px;
            font-size: 14px; font-weight: 600; border: 2px solid #6b21a8; transition: all 0.3s;
        }
        .btn-signin:hover { background: #6b21a8; color: #f3e8ff; transform: translateY(-2px); }
        .btn-signup {
            background: linear-gradient(135deg, #6b21a8, #a855f7); color: #fff;
            text-decoration: none; padding: 9px 22px; border-radius: 50px;
            font-size: 14px; font-weight: 600; transition: all 0.3s;
        }
        .btn-signup:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(168, 85, 247, 0.45); }

        /* ===== PAGE HERO ===== */
        .page-hero {
            background: linear-gradient(135deg, #6b21a8 0%, #9333ea 50%, #a855f7 100%);
            color: #fff; text-align: center; padding: 70px 20px;
            position: relative; overflow: hidden;
        }
        .page-hero::before {
            content: ''; position: absolute; top: -80px; right: -80px;
            width: 250px; height: 250px;
            background: rgba(255, 255, 255, 0.08); border-radius: 50%;
        }
        .page-hero::after {
            content: ''; position: absolute; bottom: -100px; left: -100px;
            width: 280px; height: 280px;
            background: rgba(255, 255, 255, 0.06); border-radius: 50%;
        }
        .page-hero h1 {
            font-size: 44px; font-weight: 800;
            margin-bottom: 12px; position: relative; z-index: 1;
        }
        .page-hero p {
            font-size: 17px; color: #e9d5ff;
            position: relative; z-index: 1;
        }
        .page-hero h1::after {
            content: ''; display: block; width: 80px; height: 4px;
            background: #fbbf24; margin: 18px auto 0; border-radius: 2px;
        }

        /* ===== SERVICES SECTION ===== */
        .services-section { max-width: 1200px; margin: 0 auto; padding: 70px 20px; }
        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }

        .service-card {
            background: #fff; padding: 45px 30px; border-radius: 20px;
            text-align: center; transition: all 0.4s;
            box-shadow: 0 10px 30px rgba(168, 85, 247, 0.1);
            border-top: 5px solid transparent; position: relative; overflow: hidden;
        }
        .service-card::before {
            content: ''; position: absolute; top: 0; left: 0;
            width: 100%; height: 0;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.05), rgba(236, 72, 153, 0.05));
            transition: all 0.4s; z-index: 0;
        }
        .service-card:hover::before { height: 100%; }
        .service-card > * { position: relative; z-index: 1; }

        .service-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(168, 85, 247, 0.25);
        }

        /* Colored top borders */
        .service-card:nth-child(1) { border-top-color: #22c55e; }
        .service-card:nth-child(2) { border-top-color: #3b82f6; }
        .service-card:nth-child(3) { border-top-color: #a855f7; }
        .service-card:nth-child(4) { border-top-color: #f59e0b; }
        .service-card:nth-child(5) { border-top-color: #ec4899; }
        .service-card:nth-child(6) { border-top-color: #06b6d4; }

        .service-icon {
            width: 85px; height: 85px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 40px; margin: 0 auto 20px;
            transition: transform 0.4s;
        }
        .service-card:hover .service-icon { transform: scale(1.15) rotate(8deg); }

        .service-card:nth-child(1) .service-icon { background: linear-gradient(135deg, #dcfce7, #86efac); color: #16a34a; }
        .service-card:nth-child(2) .service-icon { background: linear-gradient(135deg, #dbeafe, #93c5fd); color: #2563eb; }
        .service-card:nth-child(3) .service-icon { background: linear-gradient(135deg, #f3e8ff, #d8b4fe); color: #9333ea; }
        .service-card:nth-child(4) .service-icon { background: linear-gradient(135deg, #fef3c7, #fcd34d); color: #d97706; }
        .service-card:nth-child(5) .service-icon { background: linear-gradient(135deg, #fce7f3, #f9a8d4); color: #db2777; }
        .service-card:nth-child(6) .service-icon { background: linear-gradient(135deg, #cffafe, #67e8f9); color: #0891b2; }

        .service-card h3 { font-size: 22px; color: #6b21a8; margin-bottom: 12px; font-weight: 700; }
        .service-card p { color: #666; font-size: 14px; line-height: 1.8; }

        /* ===== CTA ===== */
        .cta { background: linear-gradient(135deg, #c084fc, #a855f7); color: #fff; text-align: center; padding: 70px 20px; margin-top: 70px; }
        .cta h2 { font-size: 34px; margin-bottom: 15px; }
        .cta p { font-size: 17px; opacity: 0.95; margin-bottom: 30px; }
        .cta-btn { display: inline-block; background: #f3e8ff; color: #6b21a8; padding: 14px 40px; border-radius: 50px; text-decoration: none; font-weight: bold; transition: all 0.3s; }
        .cta-btn:hover { background: #fff; transform: scale(1.05); box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); }

        /* ===== FOOTER ===== */
        footer { background: linear-gradient(135deg, #1a0b2e 0%, #2d1b4e 50%, #1a0b2e 100%); color: #e9d5ff; position: relative; overflow: hidden; }
        footer::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #6b21a8, #a855f7, #ec4899, #a855f7, #6b21a8); }
        footer::after { content: ''; position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(168, 85, 247, 0.15), transparent 70%); border-radius: 50%; }
        .footer-container { max-width: 1300px; margin: 0 auto; padding: 70px 20px 30px; position: relative; z-index: 1; }
        .footer-grid { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1.3fr; gap: 40px; margin-bottom: 50px; }
        .footer-brand h3 { color: #fff; font-size: 24px; margin-bottom: 18px; display: flex; align-items: center; gap: 10px; }
        .footer-brand p { color: #c4b5fd; font-size: 14px; line-height: 1.8; margin-bottom: 22px; }
        .social-icons { display: flex; gap: 12px; }
        .social-icon { width: 42px; height: 42px; border-radius: 50%; background: rgba(168, 85, 247, 0.15); border: 1px solid rgba(168, 85, 247, 0.3); display: flex; align-items: center; justify-content: center; color: #c4b5fd; text-decoration: none; font-size: 17px; transition: all 0.3s; }
        .social-icon:hover { background: linear-gradient(135deg, #a855f7, #ec4899); color: #fff; transform: translateY(-5px); box-shadow: 0 8px 20px rgba(168, 85, 247, 0.5); border-color: transparent; }
        .footer-col h4 { color: #fff; font-size: 17px; margin-bottom: 22px; position: relative; padding-bottom: 12px; }
        .footer-col h4::after { content: ''; position: absolute; bottom: 0; left: 0; width: 35px; height: 3px; background: linear-gradient(90deg, #a855f7, #ec4899); border-radius: 2px; }
        .footer-links { list-style: none; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #c4b5fd; text-decoration: none; font-size: 14px; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; }
        .footer-links a::before { content: '›'; color: #a855f7; font-size: 18px; transition: transform 0.3s; }
        .footer-links a:hover { color: #fff; padding-left: 5px; }
        .footer-links a:hover::before { transform: translateX(3px); }
        .footer-contact-item { display: flex; align-items: flex-start; gap: 12px; margin-bottom: 16px; color: #c4b5fd; font-size: 14px; line-height: 1.6; }
        .footer-contact-item span.icon { color: #a855f7; font-size: 16px; flex-shrink: 0; margin-top: 2px; }
        .newsletter-text { color: #c4b5fd; font-size: 14px; margin-bottom: 15px; line-height: 1.7; }
        .newsletter-form { display: flex; gap: 8px; margin-top: 15px; }
        .newsletter-form input { flex: 1; padding: 12px 15px; background: rgba(168, 85, 247, 0.1); border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 50px; color: #fff; font-size: 14px; font-family: inherit; outline: none; transition: all 0.3s; min-width: 0; }
        .newsletter-form input::placeholder { color: #a78bfa; }
        .newsletter-form input:focus { border-color: #a855f7; background: rgba(168, 85, 247, 0.2); box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.15); }
        .newsletter-form button { background: linear-gradient(135deg, #a855f7, #ec4899); color: #fff; border: none; padding: 12px 22px; border-radius: 50px; font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s; white-space: nowrap; }
        .newsletter-form button:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(168, 85, 247, 0.5); }
        .footer-bottom { border-top: 1px solid rgba(168, 85, 247, 0.2); padding-top: 25px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .footer-bottom p { color: #a78bfa; font-size: 14px; }
        .footer-bottom-links { display: flex; gap: 25px; list-style: none; }
        .footer-bottom-links a { color: #a78bfa; text-decoration: none; font-size: 14px; transition: color 0.3s; }
        .footer-bottom-links a:hover { color: #a855f7; }

        @media (max-width: 900px) {
            .nav-container { flex-wrap: wrap; justify-content: center; }
            .nav-links { gap: 5px; }
            .footer-grid { grid-template-columns: 1fr 1fr; gap: 35px; }
        }
        @media (max-width: 768px) {
            .page-hero h1 { font-size: 32px; }
            .cta h2 { font-size: 26px; }
        }
        @media (max-width: 600px) {
            .nav-container { flex-direction: column; gap: 12px; }
            .nav-links { gap: 5px; flex-wrap: wrap; justify-content: center; }
            .nav-links a { font-size: 13px; padding: 6px 12px; }
            .auth-buttons { width: 100%; justify-content: center; }
            .footer-grid { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .newsletter-form { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- STYLISH HEADER -->
    <header class="navbar">
        <div class="nav-container">
            <a href="home.html" class="brand">📚 ApexBooks</a>
            <ul class="nav-links">
                <li><a href="home.html">🏠 Home</a></li>
                <li><a href="about.html">ℹ️ About</a></li>
                <li><a href="services.html" class="active">⚙️ Services</a></li>
                <li><a href="contact.html">✉️ Contact Us</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="#" class="btn-signin">Sign In</a>
                <a href="#" class="btn-signup">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <h1>Our Services</h1>
        <p>Hum aap ko kya kya services provide karte hain</p>
    </section>

    <!-- SERVICES -->
    <section class="services-section">
        <div class="services-grid">

            <div class="service-card">
                <div class="service-icon">🛒</div>
                <h3>Sales Management</h3>
                <p>Sales ko record karein, invoices banayein aur customers ka hisaab rakhein — sab kuch ek jagah.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📦</div>
                <h3>Purchase Management</h3>
                <p>Vendors se purchases track karein, stock manage karein aur payments ka record rakhein.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📈</div>
                <h3>Profit & Loss Reports</h3>
                <p>Real-time profit aur loss ka analysis karein taake behtar faislay kar sakein.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Accounting</h3>
                <p>Double-entry accounting, ledgers aur complete financial reports — sab kuch automatic.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🧾</div>
                <h3>Billing & Invoicing</h3>
                <p>Professional invoices aur bills seconds mein generate karein — bilkul aasan tareeqe se.</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📋</div>
                <h3>Reports & Analytics</h3>
                <p>Sales, purchase, profit aur loss ke detailed reports dekhein — ek click par.</p>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <h2>Ready to Work With Us?</h2>
        <p>Aaj hi hum se rabta karein aur apna project shuru karein.</p>
        <a href="contact.html" class="cta-btn">Contact Us</a>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>📚 ApexBooks</h3>
                    <p>Professional accounting aur billing management system jo aap ke business ko aage badhane mein madad karta hai.</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon" title="Facebook">f</a>
                        <a href="#" class="social-icon" title="Twitter">𝕏</a>
                        <a href="#" class="social-icon" title="Instagram">📷</a>
                        <a href="#" class="social-icon" title="LinkedIn">in</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="#">Sales Management</a></li>
                        <li><a href="#">Purchase Tracking</a></li>
                        <li><a href="#">Accounting</a></li>
                        <li><a href="#">Reports & Analytics</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Stay Connected</h4>
                    <div class="footer-contact-item"><span class="icon">📍</span><span>Lahore, Pakistan</span></div>
                    <div class="footer-contact-item"><span class="icon">📞</span><span>+92 300 1234567</span></div>
                    <div class="footer-contact-item"><span class="icon">📧</span><span>info@apexbooks.com</span></div>
                    <p class="newsletter-text" style="margin-top:20px;">Latest updates ke liye subscribe karein:</p>
                    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Shukriya! Aap subscribe ho gaye hain.');">
                        <input type="email" placeholder="Aap ka email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 <strong style="color:#a855f7;">ApexBooks</strong>. All Rights Reserved.</p>
                <ul class="footer-bottom-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendors - ApexBooks</title>

    <style>
        /* ===== RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #faf5ff;
            color: #333;
            line-height: 1.6;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #e9d5ff;
            padding: 18px 0;
            box-shadow: 0 2px 12px rgba(168, 85, 247, 0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            color: #6b21a8;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .brand:hover {
            color: #a855f7;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #7e22ce;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #a855f7;
        }

        /* ===== MAIN CONTAINER ===== */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* ===== PAGE HEADER ===== */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .page-title {
            color: #6b21a8;
            font-size: 28px;
        }

        .btn-add {
            background: #6b21a8;
            color: #f3e8ff;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.3s;
        }

        .btn-add:hover {
            background: #a855f7;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(168, 85, 247, 0.3);
        }

        /* ===== VENDOR TABLE ===== */
        .table-box {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 25px rgba(168, 85, 247, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #f3e8ff;
        }

        table th {
            text-align: left;
            padding: 14px;
            color: #6b21a8;
            font-size: 14px;
            font-weight: 600;
        }

        table td {
            padding: 14px;
            border-bottom: 1px solid #f3e8ff;
            font-size: 14px;
            color: #555;
        }

        table tbody tr {
            cursor: pointer;
            transition: background 0.2s;
        }

        table tbody tr:hover {
            background: #faf5ff;
        }

        .btn-action {
            background: #f3e8ff;
            color: #6b21a8;
            border: none;
            padding: 6px 14px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-action:hover {
            background: #6b21a8;
            color: #fff;
        }

        /* ===== POPUP MODAL ===== */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(76, 29, 149, 0.5);
            backdrop-filter: blur(4px);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-box {
            background: #fff;
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(76, 29, 149, 0.4);
            animation: popIn 0.3s ease;
        }

        @keyframes popIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* ===== MODAL HEADER ===== */
        .modal-header {
            background: linear-gradient(135deg, #6b21a8, #a855f7);
            color: #fff;
            padding: 25px;
            border-radius: 20px 20px 0 0;
            position: relative;
        }

        .modal-header h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .modal-header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: rotate(90deg);
        }

        /* ===== MODAL BODY ===== */
        .modal-body {
            padding: 25px;
        }

        /* ===== VENDOR INFO ===== */
        .vendor-info {
            background: #faf5ff;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .vendor-info-row {
            display: flex;
            justify-content: space-between;
            padding: 6px 0;
            font-size: 14px;
            color: #555;
        }

        .vendor-info-row strong {
            color: #6b21a8;
        }

        /* ===== FEATURE MENU ===== */
        .feature-menu {
            display: grid;
            gap: 10px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px 18px;
            background: #fff;
            border: 2px solid #f3e8ff;
            border-radius: 12px;
            text-decoration: none;
            color: #5b21b6;
            font-weight: 500;
            transition: all 0.3s;
            cursor: pointer;
        }

        .feature-item:hover {
            background: #f3e8ff;
            border-color: #a855f7;
            transform: translateX(5px);
            color: #6b21a8;
        }

        .feature-icon {
            font-size: 22px;
            width: 40px;
            height: 40px;
            background: #f3e8ff;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .feature-item:hover .feature-icon {
            background: #6b21a8;
            color: #fff;
        }

        .feature-text {
            flex: 1;
        }

        .feature-text strong {
            display: block;
            font-size: 15px;
            color: #6b21a8;
            margin-bottom: 2px;
        }

        .feature-text span {
            font-size: 12px;
            color: #888;
        }

        .feature-arrow {
            color: #a855f7;
            font-size: 18px;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #e9d5ff;
            color: #6b21a8;
            text-align: center;
            padding: 25px 0;
            font-size: 14px;
            margin-top: 60px;
            box-shadow: 0 -2px 12px rgba(168, 85, 247, 0.15);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .page-title { font-size: 22px; }

            table { font-size: 13px; }
            table th, table td { padding: 10px 8px; }
        }
    </style>
</head>
<body>

    <!-- ================= HEADER ================= -->
    <header class="navbar">
        <div class="nav-container">
            <a href="home.html" class="brand">📚 ApexBooks</a>
            <ul class="nav-links">
                <li><a href="home.html">Home</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="vendors.html">Vendors</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>


    <!-- ================= MAIN CONTENT ================= -->
    <div class="container">

        <!-- PAGE HEADER -->
        <div class="page-header">
            <h2 class="page-title">🏢 Vendors</h2>
            <button class="btn-add" onclick="alert('Add Vendor form yahan aayega!')">+ Add New Vendor</button>
        </div>

        <!-- VENDOR TABLE -->
        <div class="table-box">
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Vendor Name</th>
                        <th>Phone</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Vendor 1 -->
                    <tr onclick="openVendorMenu('ABC Traders', 'VND-001', '0300-1234567', '50,000')">
                        <td>VND-001</td>
                        <td>ABC Traders</td>
                        <td>0300-1234567</td>
                        <td>Rs. 50,000</td>
                        <td><button class="btn-action">Open ▸</button></td>
                    </tr>

                    <!-- Vendor 2 -->
                    <tr onclick="openVendorMenu('XYZ Ltd', 'VND-002', '0321-4567890', '25,000')">
                        <td>VND-002</td>
                        <td>XYZ Ltd</td>
                        <td>0321-4567890</td>
                        <td>Rs. 25,000</td>
                        <td><button class="btn-action">Open ▸</button></td>
                    </tr>

                    <!-- Vendor 3 -->
                    <tr onclick="openVendorMenu('Ali Suppliers', 'VND-003', '0333-7891234', '10,000')">
                        <td>VND-003</td>
                        <td>Ali Suppliers</td>
                        <td>0333-7891234</td>
                        <td>Rs. 10,000</td>
                        <td><button class="btn-action">Open ▸</button></td>
                    </tr>

                    <!-- Vendor 4 -->
                    <tr onclick="openVendorMenu('Star Distributors', 'VND-004', '0345-1112223', '75,000')">
                        <td>VND-004</td>
                        <td>Star Distributors</td>
                        <td>0345-1112223</td>
                        <td>Rs. 75,000</td>
                        <td><button class="btn-action">Open ▸</button></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>


    <!-- ================= POPUP MODAL ================= -->
    <div class="modal-overlay" id="vendorModal">
        <div class="modal-box">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 id="modalVendorName">ABC Traders</h2>
                <p id="modalVendorCode">Vendor Code: VND-001</p>
                <button class="modal-close" onclick="closeVendorMenu()">✕</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <!-- Vendor Info -->
                <div class="vendor-info">
                    <div class="vendor-info-row">
                        <span>📞 Phone</span>
                        <strong id="modalPhone">0300-1234567</strong>
                    </div>
                    <div class="vendor-info-row">
                        <span>💰 Balance</span>
                        <strong id="modalBalance">Rs. 50,000</strong>
                    </div>
                </div>

                <!-- Feature Menu -->
                <div class="feature-menu">

                    <a href="#" class="feature-item">
                        <div class="feature-icon">📋</div>
                        <div class="feature-text">
                            <strong>Vendor Ledger</strong>
                            <span>Poora hisaab (lena-dena)</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">🛒</div>
                        <div class="feature-text">
                            <strong>Purchases</strong>
                            <span>Is vendor se khareedari</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">💵</div>
                        <div class="feature-text">
                            <strong>Payments</strong>
                            <span>Diye gaye paisay</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">↩️</div>
                        <div class="feature-text">
                            <strong>Purchase Returns</strong>
                            <span>Wapas ki gayi khareedari</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">📊</div>
                        <div class="feature-text">
                            <strong>Statement</strong>
                            <span>Vendor ka summary</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">⏰</div>
                        <div class="feature-text">
                            <strong>Aging Report</strong>
                            <span>Purana udhaar (30/60/90 days)</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">✏️</div>
                        <div class="feature-text">
                            <strong>Edit Vendor</strong>
                            <span>Info change karein</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                    <a href="#" class="feature-item">
                        <div class="feature-icon">🗑️</div>
                        <div class="feature-text">
                            <strong>Delete Vendor</strong>
                            <span>Vendor remove karein</span>
                        </div>
                        <span class="feature-arrow">▸</span>
                    </a>

                </div>

            </div>
        </div>
    </div>


    <!-- ================= FOOTER ================= -->
    <footer>
        <p>&copy; 2026 ApexBooks. All Rights Reserved.</p>
    </footer>


    <!-- ================= JAVASCRIPT ================= -->
    <script>
        function openVendorMenu(name, code, phone, balance) {
            document.getElementById('modalVendorName').innerText = name;
            document.getElementById('modalVendorCode').innerText = 'Vendor Code: ' + code;
            document.getElementById('modalPhone').innerText = phone;
            document.getElementById('modalBalance').innerText = 'Rs. ' + balance;
            document.getElementById('vendorModal').classList.add('active');
        }

        function closeVendorMenu() {
            document.getElementById('vendorModal').classList.remove('active');
        }

        // Bahar click karne par modal band
        document.getElementById('vendorModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeVendorMenu();
            }
        });

        // Escape key se band
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeVendorMenu();
            }
        });
    </script>

</body>
</html>
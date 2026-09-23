<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ApexBooks</title>

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
            padding: 15px 0;
            box-shadow: 0 2px 12px rgba(168, 85, 247, 0.15);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            color: #6b21a8;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        .brand:hover { color: #a855f7; }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            color: #7e22ce;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #a855f7;
            font-weight: 600;
        }

        /* ===== LAYOUT ===== */
        .layout {
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            padding: 25px 20px;
            gap: 25px;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 240px;
            background: #fff;
            border-radius: 15px;
            padding: 25px 15px;
            box-shadow: 0 5px 25px rgba(168, 85, 247, 0.1);
            height: fit-content;
            position: sticky;
            top: 90px;
        }

        .sidebar h3 {
            color: #6b21a8;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            padding-left: 10px;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: block;
            padding: 12px 15px;
            color: #5b21b6;
            text-decoration: none;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover {
            background: #f3e8ff;
            color: #6b21a8;
            padding-left: 20px;
        }

        .sidebar-menu a.active {
            background: #6b21a8;
            color: #fff;
        }

        /* ===== MAIN CONTENT ===== */
        .main-content {
            flex: 1;
        }

        .page-title {
            color: #6b21a8;
            font-size: 28px;
            margin-bottom: 25px;
        }

        /* ===== STATS CARDS ===== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(168, 85, 247, 0.1);
            border-left: 5px solid #a855f7;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(168, 85, 247, 0.2);
        }

        .stat-card.sale { border-left-color: #22c55e; }
        .stat-card.purchase { border-left-color: #3b82f6; }
        .stat-card.profit { border-left-color: #a855f7; }
        .stat-card.loss { border-left-color: #ef4444; }

        .stat-icon {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #777;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .stat-value {
            color: #1a1a2e;
            font-size: 26px;
            font-weight: bold;
        }

        .stat-change {
            font-size: 13px;
            margin-top: 8px;
            color: #22c55e;
        }

        .stat-change.down {
            color: #ef4444;
        }

        /* ===== TABLE ===== */
        .table-box {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 25px rgba(168, 85, 247, 0.1);
        }

        .table-box h3 {
            color: #6b21a8;
            font-size: 20px;
            margin-bottom: 20px;
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

        table tbody tr:hover {
            background: #faf5ff;
        }

        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-success {
            background: #dcfce7;
            color: #166534;
        }

        .badge-warning {
            background: #fef3c7;
            color: #92400e;
        }

        .badge-danger {
            background: #fee2e2;
            color: #991b1b;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #e9d5ff;
            color: #6b21a8;
            text-align: center;
            padding: 22px 0;
            font-size: 14px;
            margin-top: 30px;
            box-shadow: 0 -2px 12px rgba(168, 85, 247, 0.15);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                position: static;
            }

            .sidebar-menu {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }

            .sidebar-menu li {
                flex: 1 1 auto;
            }

            .nav-container {
                flex-direction: column;
                gap: 12px;
            }
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
                <li><a href="dashboard.html" class="active">Dashboard</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>


    <!-- ================= LAYOUT ================= -->
    <div class="layout">

        <!-- ===== SIDEBAR ===== -->
        <aside class="sidebar">
            <h3>Menu</h3>
            <ul class="sidebar-menu">
                <li><a href="dashboard.html" class="active">📊 Dashboard</a></li>
                <li><a href="#">🛒 Sales</a></li>
                <li><a href="#">📦 Purchase</a></li>
                <li><a href="#">📈 Profit</a></li>
                <li><a href="#">📉 Loss</a></li>
                <li><a href="#">📋 Reports</a></li>
                <li><a href="#">⚙️ Settings</a></li>
            </ul>
        </aside>


        <!-- ===== MAIN CONTENT ===== -->
        <main class="main-content">

            <h2 class="page-title">Dashboard Overview</h2>

            <!-- STATS CARDS -->
            <div class="stats-grid">

                <div class="stat-card sale">
                    <div class="stat-icon">🛒</div>
                    <div class="stat-label">Total Sales</div>
                    <div class="stat-value">Rs. 250,000</div>
                    <div class="stat-change">▲ 12% is month</div>
                </div>

                <div class="stat-card purchase">
                    <div class="stat-icon">📦</div>
                    <div class="stat-label">Total Purchase</div>
                    <div class="stat-value">Rs. 180,000</div>
                    <div class="stat-change">▲ 8% is month</div>
                </div>

                <div class="stat-card profit">
                    <div class="stat-icon">📈</div>
                    <div class="stat-label">Total Profit</div>
                    <div class="stat-value">Rs. 70,000</div>
                    <div class="stat-change">▲ 15% is month</div>
                </div>

                <div class="stat-card loss">
                    <div class="stat-icon">📉</div>
                    <div class="stat-label">Total Loss</div>
                    <div class="stat-value">Rs. 12,000</div>
                    <div class="stat-change down">▼ 5% is month</div>
                </div>

            </div>

            <!-- RECENT TRANSACTIONS TABLE -->
            <div class="table-box">
                <h3>Recent Transactions</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#001</td>
                            <td>15 Jan 2026</td>
                            <td>Ali Khan</td>
                            <td>Sale</td>
                            <td>Rs. 5,000</td>
                            <td><span class="badge badge-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>#002</td>
                            <td>14 Jan 2026</td>
                            <td>Ahmed Raza</td>
                            <td>Purchase</td>
                            <td>Rs. 12,000</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#003</td>
                            <td>13 Jan 2026</td>
                            <td>Sara Ali</td>
                            <td>Sale</td>
                            <td>Rs. 8,500</td>
                            <td><span class="badge badge-success">Paid</span></td>
                        </tr>
                        <tr>
                            <td>#004</td>
                            <td>12 Jan 2026</td>
                            <td>Bilal Ahmed</td>
                            <td>Purchase</td>
                            <td>Rs. 20,000</td>
                            <td><span class="badge badge-danger">Overdue</span></td>
                        </tr>
                        <tr>
                            <td>#005</td>
                            <td>11 Jan 2026</td>
                            <td>Hina Fatima</td>
                            <td>Sale</td>
                            <td>Rs. 3,200</td>
                            <td><span class="badge badge-success">Paid</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>

    </div>


    <!-- ================= FOOTER ================= -->
    <footer>
        <p>&copy; 2026 ApexBooks. All Rights Reserved.</p>
    </footer>

</body>
</html>
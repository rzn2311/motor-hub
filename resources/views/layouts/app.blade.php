<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | MOTOR HUB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        :root {
            --bg: #081426;
            --panel: #12233d;
            --panel-light: #192e4d;
            --orange: #ff9f43;
            --text: #edf4ff;
            --muted: #a8b8ce;
            --border: #2b4160;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(ellipse at top left, #19365b 0%, transparent 45%),
                linear-gradient(135deg, #081426, #0c1c32 60%, #101f38);
            color: var(--text);
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* NAVBAR */
        .navbar-custom {
            background: rgba(7, 18, 34, .92);
            border-bottom: 1px solid var(--border);
            padding: 18px 0;
        }

        .brand-name {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
            color: white;
            text-decoration: none;
        }

        .brand-name span {
            color: var(--orange);
        }

        .navbar-label {
            color: var(--muted);
            font-size: 13px;
        }

        /* HALAMAN */
        .page-content {
            min-height: 82vh;
            padding-top: 38px;
            padding-bottom: 50px;
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text);
        }

        p, .text-secondary {
            color: var(--muted) !important;
        }

        /* CARD */
        .card {
            background: var(--panel);
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .18);
        }

        .card-header {
            background: linear-gradient(110deg, #162d4c, #203d61);
            color: white;
            border-bottom: 1px solid var(--border);
            padding: 22px 25px;
        }

        .card-body {
            padding: 25px;
        }

        /* FORM */
        .form-label {
            color: #e5edfa;
        }

        .form-control {
            color: white;
            background: #0b1a2e;
            border: 1px solid #344b6a;
            border-radius: 10px;
            padding: 12px 14px;
        }

        .form-control:focus {
            color: white;
            background: #0b1a2e;
            border-color: var(--orange);
            box-shadow: 0 0 0 3px rgba(255, 159, 67, .15);
        }

        .form-control::placeholder {
            color: #8295af;
        }

        /* TOMBOL */
        .btn {
            padding: 10px 18px;
            border-radius: 10px;
            font-weight: 600;
            transition: .2s ease;
        }

        .btn-orange {
            color: #101b2c;
            background: var(--orange);
            border: 1px solid var(--orange);
        }

        .btn-orange:hover {
            color: #101b2c;
            background: #ffb15e;
            transform: translateY(-2px);
        }

        .btn-primary {
            background: #315a8b;
            border-color: #315a8b;
        }

        .btn-outline-secondary {
            color: #dce7f7;
            border-color: #526783;
        }

        .btn-outline-secondary:hover {
            background: #293e59;
            color: white;
        }

        /* TABEL */
        .table {
            --bs-table-color: var(--text);
            --bs-table-bg: transparent;
            --bs-table-border-color: var(--border);
            margin-bottom: 0;
        }

        .table thead th {
            background: #1a304e;
            color: #f5f8ff;
            padding: 15px;
            white-space: nowrap;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .table-striped > tbody > tr:nth-of-type(odd) > * {
            --bs-table-bg: rgba(255, 255, 255, .025);
            color: var(--text);
        }

        .table-hover > tbody > tr:hover > * {
            --bs-table-bg: #1a304e;
            color: white;
        }

        /* ALERT */
        .alert {
            border-radius: 12px;
        }

        /* FOOTER */
        .footer-custom {
            border-top: 1px solid var(--border);
            background: rgba(5, 15, 29, .65);
            color: var(--muted);
            text-align: center;
            padding: 22px;
            font-size: 13px;
        }

        @media (max-width: 576px) {
            .navbar-label {
                display: none;
            }

            .brand-name {
                font-size: 22px;
            }

            .page-content {
                padding-top: 25px;
            }

            .card-body {
                padding: 18px;
            }
        }
    </style>
</head>

<body>

<nav class="navbar-custom">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{ route('motor.index') }}" class="brand-name">
            MOTOR <span>HUB.</span>
        </a>

        <div class="navbar-label">
            INVENTORY MANAGEMENT SYSTEM
        </div>
    </div>
</nav>

<main class="container page-content">
    @yield('content')
</main>

<footer class="footer-custom">
    &copy; {{ date('Y') }} MOTOR HUB
    <span class="mx-2">|</span>
    Sistem Manajemen Inventaris Motor
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
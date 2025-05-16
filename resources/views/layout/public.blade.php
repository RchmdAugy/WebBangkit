<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Marketplace BANGKIT - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
        }
        .navbar {
            background-color: #1abc9c;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .btn-primary {
            background-color: #ffffff;
            color: #1abc9c;
            border: none;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #f1f1f1;
        }
        .hero {
            padding: 80px 0;
            text-align: center;
        }

        .hero h1 {
            font-weight: 800;
            font-size: 2.8rem;
            color: #2c3e50;
        }

        .hero p {
            font-size: 1.2rem;
            color: #555;
        }

        .features .card {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 30px 20px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .features .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        }

        .features i {
            font-size: 2.5rem;
            color: #1abc9c;
            margin-bottom: 15px;
            display: block;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">BANGKIT</a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="{{ route('produk.index') }}" class="nav-link">Produk</a></li>
                <li class="nav-item"><a href="{{ route('transaksi.index') }}" class="nav-link">Transaksi</a></li>

                @auth
                    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'penjual')
                        <li class="nav-item"><a href="{{ route('pesanan.index') }}" class="nav-link">Pesanan</a></li>
                        <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                    @endif
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Keluar</a></li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Masuk</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Daftar</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

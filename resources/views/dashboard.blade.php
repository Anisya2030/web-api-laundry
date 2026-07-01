<!DOCTYPE html><!-- Dashboard utama aplikasi laundry -->
<html>
<head>
    <title>Dashboard Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    <style> /* Perbaikan tampilan antarmuka */
        body{
            background:#E6F2DD;
            min-height:100vh;
        }

        .header-box{
            background:#B1D3B9;
            padding:30px;
            border-radius:25px;
            margin-bottom:40px;
        }

        .title{
            color:#659287;
            font-weight:bold;
        }

        .menu-card{
            border:none;
            border-radius:25px;
            transition:.3s;
            background:white;
        }

        .menu-card:hover{
            transform:translateY(-8px);
            box-shadow:0 15px 30px rgba(101,146,135,.25);
        }

        .stat-card{
            border:none;
            border-radius:20px;
            background:white;
        }

        .icon{
            font-size:60px;
            margin-bottom:20px;
            color:#659287;
        }

        .btn-custom{
            background:#659287;
            color:white;
            border:none;
            border-radius:50px;
        }

        .btn-custom:hover{
            background:#88BDA4;
            color:white;
        }
    </style>

</head>
<body>

<div class="container py-5">

    <!-- Header -->
    <div class="header-box shadow-sm text-center">

        <h1 class="title">
            <i class="fa-solid fa-soap"></i>
            Sistem Informasi Laundry
        </h1>

        <p class="text-muted">
            Kelola pelanggan, layanan, transaksi dan laporan laundry dengan mudah.
        </p>

    </div>

    <!-- Statistik -->
    <div class="row mb-5">

        <div class="col-md-3">
            <div class="card stat-card shadow-sm text-center p-4">
                <i class="fa-solid fa-users icon"></i>
                <h5>Total Pelanggan</h5>
                <h2>{{ $totalPelanggan }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm text-center p-4">
                <i class="fa-solid fa-shirt icon"></i>
                <h5>Total Layanan</h5>
                <h2>{{ $totalLayanan }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm text-center p-4">
                <i class="fa-solid fa-receipt icon"></i>
                <h5>Transaksi Hari Ini</h5>
                <h2>{{ $totalTransaksiHariIni }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm text-center p-4">
                <i class="fa-solid fa-money-bill-wave icon"></i>
                <h5>Pendapatan Hari Ini</h5>
                <h5>
                    Rp {{ number_format($pendapatanHariIni,0,',','.') }}
                </h5>
            </div>
        </div>

    </div>

    <!-- Menu -->
    <div class="row g-4">

        <!-- Pelanggan -->
        <div class="col-md-3">
            <div class="card menu-card shadow-sm text-center p-4">

                <div class="icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <h3>Pelanggan</h3>

                <p class="text-muted">
                    Kelola seluruh data pelanggan laundry.
                </p>

                <a href="/pelanggan"
                   class="btn btn-custom">
                    Kelola Pelanggan
                </a>

            </div>
        </div>

        <!-- Layanan -->
        <div class="col-md-3">
            <div class="card menu-card shadow-sm text-center p-4">

                <div class="icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>

                <h3>Layanan</h3>

                <p class="text-muted">
                    Kelola jenis layanan laundry.
                </p>

                <a href="/layanan"
                   class="btn btn-custom">
                    Kelola Layanan
                </a>

            </div>
        </div>

        <!-- Transaksi -->
        <div class="col-md-3">
            <div class="card menu-card shadow-sm text-center p-4">

                <div class="icon">
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>

                <h3>Transaksi</h3>

                <p class="text-muted">
                    Kelola seluruh transaksi laundry.
                </p>

                <a href="/transaksi"
                   class="btn btn-custom">
                    Kelola Transaksi
                </a>

            </div>
        </div>

        <!-- Laporan -->
        <div class="col-md-3">
            <div class="card menu-card shadow-sm text-center p-4">

                <div class="icon">
                    <i class="fa-solid fa-file-excel"></i>
                </div>

                <h3>Laporan</h3>

                <p class="text-muted">
                    Lihat laporan dan export data transaksi.
                </p>

                <a href="/laporan"
                   class="btn btn-custom">
                    Lihat Laporan
                </a>

            </div>
        </div>

    </div>

</div>

</body>
</html>

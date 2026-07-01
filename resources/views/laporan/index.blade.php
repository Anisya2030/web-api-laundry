
<!DOCTYPE html>
<html>
<head>
    <title>Laporan Laundry</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#E6F2DD;
        }

        .header-box{
            background:#B1D3B9;
            padding:25px;
            border-radius:20px;
            margin-bottom:30px;
        }

        .card-custom{
            background:white;
            border:none;
            border-radius:20px;
            padding:25px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .table thead{
            background:#659287;
            color:white;
        }

        .btn-custom{
            background:#659287;
            color:white;
        }

        .btn-custom:hover{
            background:#88BDA4;
            color:white;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <a href="/dashboard"
       class="btn btn-secondary mb-3">
        ← Kembali ke Dashboard
    </a>

    <div class="header-box text-center">
        <h2>📊 Laporan Laundry</h2>
        <p class="text-muted">
            Rekap pendapatan dan transaksi laundry
        </p>
    </div>

    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card-custom text-center">
                <h5>Pendapatan Hari Ini</h5>
                <h3>
                    Rp {{ number_format($hariIni,0,',','.') }}
                </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom text-center">
                <h5>Pendapatan Minggu Ini</h5>
                <h3>
                    Rp {{ number_format($mingguIni,0,',','.') }}
                </h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom text-center">
                <h5>Pendapatan Bulan Ini</h5>
                <h3>
                    Rp {{ number_format($bulanIni,0,',','.') }}
                </h3>
            </div>
        </div>

    </div>

    <div class="card-custom">

        <div class="d-flex justify-content-between mb-3">
            <h4>Data Transaksi</h4>

            <a href="/laporan/excel"
               class="btn btn-success">
                Download Excel
            </a>
        </div>

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>Layanan</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>

                @foreach($transaksi as $t)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->pelanggan->nama }}</td>
                    <td>{{ $t->layanan->nama_layanan }}</td>
                    <td>
                        Rp {{ number_format($t->total_harga,0,',','.') }}
                    </td>
                    <td>{{ $t->status }}</td>
                    <td>
                        {{ $t->created_at->format('d-m-Y') }}
                    </td>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Layanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #E6F2DD;
        }

        .header-box{
            background: #B1D3B9;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .detail-card{
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .table th{
            width: 200px;
            background: #659287;
            color: white;
        }
    </style>

</head>
<body>

<div class="container mt-5">

    <!-- Tombol Kembali -->
    <a href="/layanan"
       class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>🧺 Detail Layanan</h2>
        <p class="text-muted">
            Informasi lengkap data layanan laundry
        </p>
    </div>

    <!-- Card Detail -->
    <div class="detail-card">

        <table class="table table-bordered">

            <tr>
                <th>Nama Layanan</th>
                <td>{{ $layanan->nama_layanan }}</td>
            </tr>

            <tr>
                <th>Harga</th>
                <td>
                    Rp {{ number_format($layanan->harga,0,',','.') }}
                </td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>


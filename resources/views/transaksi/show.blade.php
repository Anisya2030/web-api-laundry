
<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi</title>

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
            width: 220px;
            background: #659287;
            color: white;
        }
    </style>

</head>
<body>

<div class="container mt-5">

    <!-- Tombol Kembali -->
    <a href="/transaksi"
       class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>💳 Detail Transaksi</h2>
        <p class="text-muted">
            Informasi lengkap transaksi laundry
        </p>
    </div>

    <!-- Detail -->
    <div class="detail-card">

        <table class="table table-bordered">

            <tr>
                <th>Pelanggan</th>
                <td>{{ $transaksi->pelanggan->nama }}</td>
            </tr>

            <tr>
                <th>Layanan</th>
                <td>{{ $transaksi->layanan->nama_layanan }}</td>
            </tr>

            <tr>
                <th>Berat</th>
                <td>{{ $transaksi->berat_kg }} Kg</td>
            </tr>

            <tr>
                <th>Total Harga</th>
                <td>
                    Rp {{ number_format($transaksi->total_harga,0,',','.') }}
                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>
                    @if($transaksi->status == 'Proses')
                        <span class="badge bg-warning">
                            {{ $transaksi->status }}
                        </span>
                    @elseif($transaksi->status == 'Selesai')
                        <span class="badge bg-success">
                            {{ $transaksi->status }}
                        </span>
                    @else
                        <span class="badge bg-primary">
                            {{ $transaksi->status }}
                        </span>
                    @endif
                </td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>


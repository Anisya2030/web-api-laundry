
<!DOCTYPE html>
<html>
<head>
    <title>Detail Pelanggan</title>

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
    <a href="/pelanggan"
       class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>👤 Detail Pelanggan</h2>
        <p class="text-muted">
            Informasi lengkap data pelanggan
        </p>
    </div>

    <!-- Detail -->
    <div class="detail-card">

        <table class="table table-bordered">

            <tr>
                <th>Nama</th>
                <td>{{ $pelanggan->nama }}</td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td>{{ $pelanggan->alamat }}</td>
            </tr>

            <tr>
                <th>No HP</th>
                <td>{{ $pelanggan->no_hp }}</td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>


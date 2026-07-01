
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Layanan</title>

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

        .form-card{
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .btn-custom{
            background: #659287;
            color: white;
            border: none;
        }

        .btn-custom:hover{
            background: #88BDA4;
            color: white;
        }

        label{
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <!-- Tombol Kembali -->
    <a href="/layanan" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>🧺 Tambah Layanan</h2>
        <p class="text-muted">
            Tambahkan layanan laundry baru
        </p>
    </div>

    <!-- Form -->
    <div class="form-card">

        <form action="/layanan" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Layanan</label>
                <input type="text"
                       name="nama_layanan"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Harga</label>
                <input type="number"
                       name="harga"
                       class="form-control"
                       required>
            </div>

            <button type="submit" class="btn btn-custom">
                Simpan
            </button>

        </form>

    </div>

</div>

</body>
</html>


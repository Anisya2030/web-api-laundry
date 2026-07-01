<!DOCTYPE html>
<html>
<head>
    <title>Data Layanan</title>

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

        .table-container{
            background: white;
            border-radius: 20px;
            padding: 25px;
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

        .table thead{
            background: #659287;
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <!-- Tombol Kembali -->
    <a href="/dashboard" class="btn btn-secondary mb-3">
        ← Kembali ke Dashboard
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>🧺 Data Layanan</h2>
        <p class="text-muted">
            Kelola seluruh layanan laundry
        </p>
    </div>

    <!-- Tabel -->
    <div class="table-container">

        <a href="/layanan/create"
           class="btn btn-custom mb-3">
            + Tambah Layanan
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Layanan</th>
                    <th>Harga</th>
                    <th width="250px">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($layanan as $l)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $l->nama_layanan }}</td>
                    <td>Rp {{ number_format($l->harga,0,',','.') }}</td>

                    <td>

                        <a href="/layanan/{{ $l->id }}"
                           class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="/layanan/{{ $l->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/layanan/{{ $l->id }}"
                              method="POST"
                              style="display:inline-block;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>


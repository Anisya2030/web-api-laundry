
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>

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

        .table{
            vertical-align: middle;
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
        <h2>👥 Data Pelanggan</h2>
        <p class="text-muted">
            Kelola seluruh data pelanggan laundry
        </p>
    </div>

    <!-- Tabel -->
    <div class="table-container">

        <a href="/pelanggan/create"
           class="btn btn-custom mb-3">
            + Tambah Pelanggan
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
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th width="250px">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($pelanggan as $p)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>

                    <td>

                        <a href="/pelanggan/{{ $p->id }}"
                           class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <a href="/pelanggan/{{ $p->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/pelanggan/{{ $p->id }}"
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


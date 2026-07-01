
<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>

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
        <h2>💳 Data Transaksi</h2>
        <p class="text-muted">
            Kelola seluruh transaksi laundry
        </p>
    </div>

    <!-- Tabel -->
    <div class="table-container">

        <a href="/transaksi/create"
           class="btn btn-custom mb-3">
            + Tambah Transaksi
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
                    <th>Pelanggan</th>
                    <th>Layanan</th>
                    <th>Berat (Kg)</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th width="250px">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($transaksi as $t)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->pelanggan->nama }}</td>
                    <td>{{ $t->layanan->nama_layanan }}</td>
                    <td>{{ $t->berat_kg }} Kg</td>
                    <td>Rp {{ number_format($t->total_harga,0,',','.') }}</td>

                    <td>
                        @if($t->status == 'Proses')
                            <span class="badge bg-warning">
                                {{ $t->status }}
                            </span>
                        @elseif($t->status == 'Selesai')
                            <span class="badge bg-success">
                                {{ $t->status }}
                            </span>
                        @else
                            <span class="badge bg-primary">
                                {{ $t->status }}
                            </span>
                        @endif
                    </td>

                    <td>

                        <!-- Detail -->
                        <a href="/transaksi/{{ $t->id }}"
                           class="btn btn-info btn-sm">
                            Detail
                        </a>

                        <!-- Edit -->
                        <a href="/transaksi/{{ $t->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <!-- Hapus -->
                        <form action="/transaksi/{{ $t->id }}"
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


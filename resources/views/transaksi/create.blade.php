<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>

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
    <a href="/transaksi" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <!-- Header -->
    <div class="header-box text-center">
        <h2>💳 Tambah Transaksi</h2>
        <p class="text-muted">
            Tambahkan transaksi laundry baru
        </p>
    </div>

    <!-- Form -->
    <div class="form-card">

        <form action="/transaksi" method="POST">
            @csrf

            <div class="mb-3">
                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control">
                    <option value="">-- Pilih Pelanggan --</option>

                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}">
                            {{ $p->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Layanan</label>

                <select name="layanan_id"
                        id="layanan"
                        class="form-control"
                        onchange="hitungTotal()">

                    <option value="">-- Pilih Layanan --</option>

                    @foreach($layanan as $l)
                        <option value="{{ $l->id }}"
                                data-harga="{{ $l->harga }}">
                            {{ $l->nama_layanan }}
                            - Rp {{ number_format($l->harga) }}/Kg
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label>Berat (Kg)</label>

                <input type="number"
                       id="berat"
                       name="berat_kg"
                       class="form-control"
                       onkeyup="hitungTotal()">
            </div>

            <div class="mb-3">
                <label>Total Harga</label>

                <input type="number"
                       id="total"
                       name="total_harga"
                       class="form-control"
                       readonly>
            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status" class="form-control">
                    <option value="Proses">Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Diambil">Diambil</option>
                </select>
            </div>

            <button type="submit" class="btn btn-custom">
                Simpan
            </button>

        </form>

    </div>

</div>

<script>
function hitungTotal(){

    let layanan = document.getElementById('layanan');
    let berat = document.getElementById('berat').value;

    let harga =
        layanan.options[layanan.selectedIndex]
        .getAttribute('data-harga');

    if(harga && berat){
        document.getElementById('total').value =
            harga * berat;
    }else{
        document.getElementById('total').value = '';
    }
}
</script>

</body>
</html>


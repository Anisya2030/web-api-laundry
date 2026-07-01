
<!DOCTYPE html>
<html>
<head>
    <title>Edit Transaksi</title>

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

    <a href="/transaksi" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <div class="header-box text-center">
        <h2>✏️ Edit Transaksi</h2>
        <p class="text-muted">
            Ubah data transaksi laundry
        </p>
    </div>

    <div class="form-card">

        <form action="/transaksi/{{ $transaksi->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Pelanggan</label>

                <select name="pelanggan_id" class="form-control">
                    @foreach($pelanggan as $p)
                        <option value="{{ $p->id }}"
                            {{ $transaksi->pelanggan_id == $p->id ? 'selected' : '' }}>
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

                    @foreach($layanan as $l)
                        <option value="{{ $l->id }}"
                                data-harga="{{ $l->harga }}"
                                {{ $transaksi->layanan_id == $l->id ? 'selected' : '' }}>

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
                       value="{{ $transaksi->berat_kg }}"
                       onkeyup="hitungTotal()">
            </div>

            <div class="mb-3">
                <label>Total Harga</label>

                <input type="number"
                       id="total"
                       name="total_harga"
                       class="form-control"
                       value="{{ $transaksi->total_harga }}"
                       readonly>
            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status" class="form-control">

                    <option value="Proses"
                        {{ $transaksi->status == 'Proses' ? 'selected' : '' }}>
                        Proses
                    </option>

                    <option value="Selesai"
                        {{ $transaksi->status == 'Selesai' ? 'selected' : '' }}>
                        Selesai
                    </option>

                    <option value="Diambil"
                        {{ $transaksi->status == 'Diambil' ? 'selected' : '' }}>
                        Diambil
                    </option>

                </select>
            </div>

            <button type="submit" class="btn btn-custom">
                Update
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
    }
}
</script>

</body>
</html>


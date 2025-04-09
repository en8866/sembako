<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Sembako</title>
</head>
<body>
    <h2>Tambah Data Sembako</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sembako.store') }}" method="POST">
        @csrf

        <label>Nama Barang:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Kategori:</label><br>
        <input type="text" name="kategori" required><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" step="0.01" required><br><br>

        <label>Satuan:</label><br>
        <select name="satuan" required>
            <option value="">-- Pilih Satuan --</option>
            <option value="kg">kg</option>
            <option value="liter">liter</option>
            <option value="bungkus">bungkus</option>
            <option value="pack">pack</option>
        </select><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('sembako.index') }}">Batal</a>
    </form>
</body>
</html>

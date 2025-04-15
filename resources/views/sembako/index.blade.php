<!DOCTYPE html>
<html>
<head>
    <title>Data Sembako</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        a {
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        a:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        .success-message {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h2>Daftar Sembako</h2>

    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <a href="{{ route('sembako.create') }}">Tambah Data</a><br><br>

    <table>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Satuan</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->satuan }}</td>
            <td>
                <a href="{{ route('sembako.edit', $item->id) }}">Edit</a> |
                <form action="{{ route('sembako.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

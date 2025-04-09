<?php

namespace App\Http\Controllers;

use App\Models\Sembako;
use Illuminate\Http\Request;

class SembakoController extends Controller
{
    public function index()
    {
        $data = Sembako::all();
        return view('sembako.index', compact('data'));
    }

    public function create()
    {
        return view('sembako.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama_barang' => 'required|string|max:255',
        'jumlah_barang' => 'required|integer|min:0',
        'harga_barang' => 'required|numeric|min:0',
        'satuan' => 'required|string',
    ]);

    Sembako::create($validated);

    return redirect()->route('sembako.index')->with('success', 'Data sembako berhasil ditambahkan!');
}

    public function edit($id)
    {
        $item = Sembako::findOrFail($id);
        return view('sembako.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Sembako::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('sembako.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $item = Sembako::findOrFail($id);
        $item->delete();
        return redirect()->route('sembako.index')->with('success', 'Data berhasil dihapus');
    }
}


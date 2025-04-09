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
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
            'satuan' => 'required',
        ]);

        Sembako::create($request->all());
        return redirect()->route('sembako.index')->with('success', 'Data berhasil ditambahkan');
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


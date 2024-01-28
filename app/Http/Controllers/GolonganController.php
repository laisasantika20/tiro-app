<?php

namespace App\Http\Controllers;

use App\Models\golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongans = golongan::all();
        return view('backend.golongan.add_golongan', compact('golongans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_golongan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        golongan::create($request->all());

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil ditambahkan');
    }

    public function edit(golongan $golongan)
    {
        return view('backend.golongan.edit_golongan', compact('golongan'));
    }

    public function update(Request $request, golongan $golongan)
    {
        $request->validate([
            'nama_golongan' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $golongan->update($request->all());

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil diperbarui');
    }

    public function destroy(golongan $golongan)
    {
        $golongan->delete();

        return redirect()->route('golongan.index')->with('success', 'Golongan berhasil dihapus');
    }
}

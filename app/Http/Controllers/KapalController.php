<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kapal;

class KapalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kapals = Kapal::all();
       return view('backend.kapal.add_kapal',compact('kapals'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nm_kapal' => 'required|string',
            'kapasitas' => 'required|integer',
        ]);

        // Simpan data kapal ke dalam database
        Kapal::create([
            'nm_kapal' => $request->input('nm_kapal'),
            'kapasitas' => $request->input('kapasitas'),
        ]);

        // Redirect ke halaman daftar kapal dengan pesan sukses
        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kapal = Kapal::findOrFail($id);
        return view('backend.kapal.edit_kapal', compact('kapal'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nm_kapal' => 'required|string',
            'kapasitas' => 'required|integer',
        ]);

        // Dapatkan kapal yang akan diupdate
        $kapal = Kapal::findOrFail($id);

        // Update data kapal di dalam database
        $kapal->update([
            'nm_kapal' => $request->input('nm_kapal'),
            'kapasitas' => $request->input('kapasitas'),
        ]);

        // Redirect ke halaman daftar kapal dengan pesan sukses
        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil diupdate.');
    
    }

    public function destroy($id)
    {
        // Dapatkan kapal yang akan dihapus
        $kapal = Kapal::findOrFail($id);

        // Hapus kapal dari database
        $kapal->delete();

        // Redirect ke halaman daftar kapal dengan pesan sukses
        return redirect()->route('kapal.index')->with('success', 'Kapal berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Alker;
use Illuminate\Http\Request;

class AlkerController extends Controller
{
    public function index()
    {
        $alkers = Alker::all();
        return view('alker.index', compact('alkers'));
    }

    public function create()
    {
        return view('alker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_alker' => 'required|string|max:255',
            'nama_alker' => 'required|string|max:255',
            'kategori'   => 'required|in:Laptop / Komputer,Perangkat Jaringan,Alat Ukur & Tester,Peralatan Kantor,Peralatan Lapangan',
            'jumlah'     => 'required|integer|min:1',
            'kondisi'    => 'required|in:Baik,Rusak,Perbaikan',
            'lokasi'     => 'required|string|max:255',
            'terakhir_dikalibrasi' => 'nullable|date',
        ]);

        Alker::create([
            'kode_alker' => $request->kode_alker,
            'nama_alker' => $request->nama_alker,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'lokasi' => $request->lokasi,
            'terakhir_dikalibrasi' => $request->terakhir_dikalibrasi
        ]);

        return redirect()->route('alkers.index')->with('success', 'Alker berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $alker = Alker::findOrFail($id);
        return view('alker.edit', compact('alker'));
    }

    public function update(Request $request, $id)
    {
        $alker = Alker::findOrFail($id);

        $request->validate([
            'kode_alker' => 'required|string|max:255',
            'nama_alker' => 'required|string|max:255',
            'kategori'   => 'required|in:Laptop / Komputer,Perangkat Jaringan,Alat Ukur & Tester,Peralatan Kantor,Peralatan Lapangan',
            'jumlah'     => 'required|integer|min:1',
            'kondisi'    => 'required|in:Baik,Rusak,Perbaikan',
            'lokasi'     => 'required|string|max:255',
            'terakhir_dikalibrasi' => 'nullable|date',
        ]);

        $alker->update([
            'kode_alker' => $request->kode_alker,
            'nama_alker' => $request->nama_alker,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'lokasi' => $request->lokasi,
            'terakhir_dikalibrasi' => $request->terakhir_dikalibrasi
        ]);

        return redirect()->route('alkers.index')->with('success', 'Alker berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Alker::destroy($id);
        return redirect()->route('alkers.index')->with('success', 'Alker berhasil dihapus.');
    }
}

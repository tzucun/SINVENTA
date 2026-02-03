<?php

namespace App\Http\Controllers;

use App\Models\Salker;
use Illuminate\Http\Request;

class SalkerController extends Controller
{
    public function index()
    {
        $salkers = Salker::all();
        return view('salker.index', compact('salkers'));
    }

    public function create()
    {
        return view('salker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_salker' => 'required|string|max:255',
            'nama_salker' => 'required|string|max:255',
            'jenis'       => 'required|in:Mobil Dinas,Motor Dinas,Peralatan Komunikasi,Ruang Server / Data Center,Gudang / Workshop',
            'jumlah'      => 'required|integer|min:1',
            'kondisi'     => 'required|in:Baik,Rusak,Perbaikan',
            'lokasi'      => 'required|string|max:255',
        ]);

        Salker::create($request->all());

        return redirect()->route('salkers.index')->with('success', 'Salker berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $salker = Salker::findOrFail($id);
        return view('salker.edit', compact('salker'));
    }

    public function update(Request $request, $id)
    {
        $salker = Salker::findOrFail($id);

        $request->validate([
            'kode_salker' => 'required|string|max:255',
            'nama_salker' => 'required|string|max:255',
            'jenis'       => 'required|in:Mobil Dinas,Motor Dinas,Peralatan Komunikasi,Ruang Server / Data Center,Gudang / Workshop',
            'jumlah'      => 'required|integer|min:1',
            'kondisi'     => 'required|in:Baik,Rusak,Perbaikan',
            'lokasi'      => 'required|string|max:255',
        ]);

        $salker->update($request->all());

        return redirect()->route('salkers.index')->with('success', 'Salker berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Salker::destroy($id);
        return redirect()->route('salkers.index')->with('success', 'Salker berhasil dihapus.');
    }
}

@extends('layouts.appex')

@section('content')
<div class="form-card">

<h2>Edit Alat Kerja (Alker)</h2>

<form action="{{ route('alkers.update', $alker->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Kode Alker</label>
        <input type="text" name="kode_alker"
               value="{{ $alker->kode_alker }}" required>
    </div>

    <div class="form-group">
        <label>Nama Alker</label>
        <input type="text" name="nama_alker"
               value="{{ $alker->nama_alker }}" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Laptop / Komputer" {{ old('kategori', $alker->kategori)=='Laptop / Komputer' ? 'selected' : '' }}>Laptop / Komputer</option>
            <option value="Perangkat Jaringan" {{ old('kategori', $alker->kategori)=='Perangkat Jaringan' ? 'selected' : '' }}>Perangkat Jaringan</option>
            <option value="Alat Ukur & Tester" {{ old('kategori', $alker->kategori)=='Alat Ukur & Tester' ? 'selected' : '' }}>Alat Ukur & Tester</option>
            <option value="Peralatan Kantor" {{ old('kategori', $alker->kategori)=='Peralatan Kantor' ? 'selected' : '' }}>Peralatan Kantor</option>
            <option value="Peralatan Lapangan" {{ old('kategori', $alker->kategori)=='Peralatan Lapangan' ? 'selected' : '' }}>Peralatan Lapangan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah"
               value="{{ $alker->jumlah }}" min="1">
    </div>

    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <select name="kondisi" id="kondisi" required>
            <option value="">-- Kondisi --</option>
            <option value="Baik" {{ old('kondisi', $alker->kondisi)=='Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak" {{ old('kondisi', $alker->kondisi)=='Rusak' ? 'selected' : '' }}>Rusak</option>
            <option value="Perbaikan" {{ old('kondisi', $alker->kondisi)=='Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi"
               value="{{ $alker->lokasi }}">
    </div>

    <div class="form-group">
        <label>Terakhir Dikalibrasi</label>
        <input type="date" name="terakhir_dikalibrasi"
            value="{{ $alker->terakhir_dikalibrasi }}">
    </div>

    <div class="form-actions">
        <a href="{{ route('alkers.index') }}" class="btn btn-secondary">
            Batal
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </div>

</form>
</div>
@endsection

<<<<<<< HEAD
@extends('layouts.appex')
=======
@extends('layouts.app')
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5

@section('content')
<div class="form-card">

<h2>Tambah Alat Kerja (Alker)</h2>

<form action="{{ route('alkers.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Kode Alker</label>
        <input type="text" name="kode_alker" required>
    </div>

    <div class="form-group">
        <label>Nama Alker</label>
        <input type="text" name="nama_alker" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Laptop / Komputer" {{ old('kategori')=='Laptop / Komputer' ? 'selected' : '' }}>Laptop / Komputer</option>
            <option value="Perangkat Jaringan" {{ old('kategori')=='Perangkat Jaringan' ? 'selected' : '' }}>Perangkat Jaringan</option>
            <option value="Alat Ukur & Tester" {{ old('kategori')=='Alat Ukur & Tester' ? 'selected' : '' }}>Alat Ukur & Tester</option>
            <option value="Peralatan Kantor" {{ old('kategori')=='Peralatan Kantor' ? 'selected' : '' }}>Peralatan Kantor</option>
            <option value="Peralatan Lapangan" {{ old('kategori')=='Peralatan Lapangan' ? 'selected' : '' }}>Peralatan Lapangan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah" min="1">
    </div>

    <div class="form-group">
        <label for="kondisi">Kondisi</label>
        <select name="kondisi" id="kondisi" required>
            <option value="">-- Pilih Kondisi --</option>
            <option value="Baik" {{ old('kondisi')=='Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak" {{ old('kondisi')=='Rusak' ? 'selected' : '' }}>Rusak</option>
            <option value="Perbaikan" {{ old('kondisi')=='Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi">
    </div>

    <div class="form-group">
        <label>Terakhir Dikalibrasi</label>
        <input type="date" name="terakhir_dikalibrasi">
    </div>

    <div class="form-actions">
        <a href="{{ route('alkers.index') }}" class="btn btn-secondary">
            Kembali
        </a>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </div>

</form>
</div>
@endsection

@extends('layouts.appex')

@section('content')
<div class="form-card">

<h2>Tambah Sarana Kerja (Salker)</h2>

<form action="{{ route('salkers.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label>Kode Salker</label>
        <input type="text" name="kode_salker" required>
    </div>

    <div class="form-group">
        <label>Nama Salker</label>
        <input type="text" name="nama_salker" required>
    </div>

    <div class="form-group">
        <label for="jenis">Jenis Salker</label>
        <select name="jenis" id="jenis" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="Mobil Dinas" {{ old('jenis')=='Mobil Dinas' ? 'selected' : '' }}>Mobil Dinas</option>
            <option value="Motor Dinas" {{ old('jenis')=='Motor Dinas' ? 'selected' : '' }}>Motor Dinas</option>
            <option value="Peralatan Komunikasi" {{ old('jenis')=='Peralatan Komunikasi' ? 'selected' : '' }}>Peralatan Komunikasi</option>
            <option value="Ruang Server / Data Center" {{ old('jenis')=='Ruang Server / Data Center' ? 'selected' : '' }}>Ruang Server / Data Center</option>
            <option value="Gudang / Workshop" {{ old('jenis')=='Gudang / Workshop' ? 'selected' : '' }}>Gudang / Workshop</option>
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

    <div class="form-actions">
        <a href="{{ route('salkers.index') }}" class="btn btn-secondary">
            Kembali
        </a>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
    </div>

</form>
</div>
@endsection
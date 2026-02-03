<<<<<<< HEAD
@extends('layouts.appex')
=======
@extends('layouts.app')
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5

@section('content')
<div class="form-card">

<h2>Edit Sarana Kerja (Salker)</h2>

<form action="{{ route('salkers.update', $salker->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Kode Salker</label>
        <input type="text" name="kode_salker"
               value="{{ $salker->kode_salker }}" required>
    </div>

    <div class="form-group">
        <label>Nama Salker</label>
        <input type="text" name="nama_salker"
               value="{{ $salker->nama_salker }}" required>
    </div>

    <div class="form-group">
        <label for="jenis">Jenis Salker</label>
        <select name="jenis" id="jenis" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="Mobil Dinas" {{ old('jenis', $salker->jenis)=='Mobil Dinas' ? 'selected' : '' }}>Mobil Dinas</option>
            <option value="Motor Dinas" {{ old('jenis', $salker->jenis)=='Motor Dinas' ? 'selected' : '' }}>Motor Dinas</option>
            <option value="Peralatan Komunikasi" {{ old('jenis', $salker->jenis)=='Peralatan Komunikasi' ? 'selected' : '' }}>Peralatan Komunikasi</option>
            <option value="Ruang Server / Data Center" {{ old('jenis', $salker->jenis)=='Ruang Server / Data Center' ? 'selected' : '' }}>Ruang Server / Data Center</option>
            <option value="Gudang / Workshop" {{ old('jenis', $salker->jenis)=='Gudang / Workshop' ? 'selected' : '' }}>Gudang / Workshop</option>
        </select>
    </div>

    <div class="form-group">
        <label>Jumlah</label>
        <input type="number" name="jumlah"
               value="{{ $salker->jumlah }}" min="1">
    </div>

    <div class="form-group">
        <label for="kondisi">Jenis Salker</label>
        <select name="kondisi" id="kondisi" required>
            <option value="">-- Kondisi --</option>
            <option value="Baik" {{ old('kondisi', $salker->kondisi)=='Baik' ? 'selected' : '' }}>Baik</option>
            <option value="Rusak" {{ old('kondisi', $salker->kondisi)=='Rusak' ? 'selected' : '' }}>Rusak</option>
            <option value="Perbaikan" {{ old('kondisi', $salker->kondisi)=='Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi"
               value="{{ $salker->lokasi }}">
    </div>

    <div class="form-actions">
        <a href="{{ route('salkers.index') }}" class="btn btn-secondary">
            Batal
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </div>

</form>
</div>
@endsection
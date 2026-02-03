@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<h2 id="judulhalaman">Data Sarana Kerja (Salker)</h2>

<div class="page-actions">
    <a href="{{ route('salkers.create') }}" class="btn btn-primary">
        + Tambah Salker
    </a>
</div>

@if(session('success'))
<div class="alert-success alert-space">
=======
<div class="container">

<h2 id="judulhalaman">Data Sarana Kerja (Salker)</h2>

<a href="{{ route('salkers.create') }}" class="btn btn-primary">
    + Tambah Salker
</a>

@if(session('success'))
<div class="alert-success">
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5
    {{ session('success') }}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
    </thead>

@foreach($salkers as $salker)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $salker->kode_salker }}</td>
    <td>{{ $salker->nama_salker }}</td>
    <td>{{ $salker->jenis }}</td>
    <td>{{ $salker->jumlah }}</td>
    <td>{{ $salker->kondisi }}</td>
    <td>{{ $salker->lokasi }}</td>
    <td>
        <div class="action-buttons">
            <a href="{{ route('salkers.edit', $salker->id) }}" class="btn btn-edit">
                Edit
            </a>

            <form action="{{ route('salkers.destroy', $salker->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-delete"
                    onclick="return confirm('Anda yakin akan menghapus data?')">
                    Hapus
                </button>
            </form>
        </div>
    </td>
</tr>
@endforeach
</table>
@endsection

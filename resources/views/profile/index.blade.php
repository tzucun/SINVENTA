@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-3">Profil Pengguna</h2>

    <div class="card">
        <div class="card-body">

            <p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>Role:</strong> {{ auth()->user()->role ?? 'User' }}</p>

            <a href="/dashboard" class="btn btn-secondary mt-3">
                Kembali ke Dashboard
            </a>

        </div>
    </div>

</div>
@endsection

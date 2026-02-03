@extends('layouts.auth')

@section('content')
<div class="auth-box">
    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Konfirmasi Password</h2>
    <p class="auth-desc">Masukkan password untuk melanjutkan.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn-primary btn-block">
            Konfirmasi
        </button>
    </form>
</div>
@endsection

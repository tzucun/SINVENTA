@extends('layouts.auth')

@section('content')
<div class="auth-box">
    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Konfirmasi Password</h2>
    <p class="auth-desc">Masukkan password untuk melanjutkan.</p>

    @if (session('status'))
        <div class="alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert-error">
            {{ $errors->first() }}
        </div>
    @endif
    
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

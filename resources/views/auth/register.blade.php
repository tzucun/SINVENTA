@extends('layouts.auth')

@section('content')
<div class="auth-box">
    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Daftar Akun Inventaris Telkom</h2>

    @if ($errors->any())
        <div class="alert-error">
            <ul style="margin:0; padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Nama</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn-primary btn-block">
            Daftar
        </button>
    </form>

    <p class="auth-footer">
        Sudah punya akun?
        <a href="{{ route('login') }}">Login</a>
    </p>
</div>
@endsection

@extends('layouts.auth')

@section('content')
<div class="auth-box">
    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Login Inventaris Telkom</h2>

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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>Email</label>
        <input type="email" name="email" required autofocus>

        <label>Password</label>
        <input type="password" name="password" required>

        <div class="auth-row">
            <label class="remember-me">
                <input type="checkbox" name="remember">
                <span>Ingat saya</span>
            </label>

            <a href="{{ route('password.request') }}">
                Lupa password?
            </a>
        </div>

        <button type="submit" class="btn-primary btn-block">
            Login
        </button>
    </form>

    <p class="auth-footer">
        Belum punya akun?
        <a href="{{ route('register') }}">Daftar</a>
    </p>
</div>
@endsection

@extends('layouts.auth')

@section('content')
<div class="auth-box">
    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Reset Password</h2>

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

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('PUT')

        <input type="hidden" name="token" value="{{ $token }}">

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $email) }}" required>

        <label>Password Baru</label>
        <input type="password" name="password" required>

        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn-primary btn-block">
            Reset Password
        </button>
    </form>
</div>
@endsection

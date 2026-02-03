@extends('layouts.auth')

@section('content')
<div class="auth-box">

    <div class="auth-logo">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

    <h2>Lupa Password</h2>

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
    
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <button type="submit" class="btn-primary btn-block">
            Kirim Link Reset
        </button>
    </form>

</div>
@endsection

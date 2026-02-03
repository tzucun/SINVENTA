@extends('layouts.app')

@section('content')
<div class="hero">

    <div class="hero-text">
        <h1>Sistem Inventaris Aset Telkom</h1>
        <p>
            Aplikasi manajemen Alat Kerja (Alker) dan Sarana Kerja (Salker)  
            untuk mendukung operasional PT Telkom Indonesia.
        </p>

        @guest
            <a href="/login" class="btn btn-primary">
                Login ke Sistem
            </a>
        @endguest

        @auth
            <p class="welcome-user">
                Selamat datang, {{ auth()->user()->name }} 👋  
                Silakan gunakan menu di atas untuk mengelola aset.
            </p>
        @endauth

    </div>

    <div class="hero-image">
        <img src="{{ asset('images/telkom-logo.png') }}" alt="Telkom">
    </div>

</div>
@endsection

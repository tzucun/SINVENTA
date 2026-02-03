<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SINVENTA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script>
        (function () {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
</head>
<body>

<header>
    <h2>
        <a href="{{ url('/') }}" class="brand-link" style="display:flex; align-items:center; gap:10px;">
            <img src="{{ asset('images/SINVENTA.png') }}"
                alt="SINVENTA"
                style="height:32px; width:auto; display:block;">
        </a>

    </h2>

    <nav style="display:flex; align-items:center; gap:12px;">

        @auth
        <a href="{{ route('alkers.index') }}">Alker</a>
        <a href="{{ route('salkers.index') }}">Salker</a>
        <a href="/dashboard">Dashboard</a>
        @endauth

        <span style="flex:1"></span>

        <label class="theme-switch">
            <input type="checkbox" id="themeSwitch" onclick="toggleTheme()">
            <span class="slider"></span>
            <span class="label" id="themeLabel">🌙 Dark</span>
        </label>

        @auth
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="logout-btn" type="submit"
                        style="display:inline-flex;align-items:center;gap:6px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1"/>
                    </svg>
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <!-- <a href="/login">Login</a> -->
        @endguest
    </nav>
</header>

@yield('content')
@yield('scripts')

<script>
    function toggleTheme() {
        const html = document.documentElement;
        const checkbox = document.getElementById('themeSwitch');
        const label = document.getElementById('themeLabel');

        const isDark = checkbox.checked;
        html.classList.toggle('dark', isDark);
        localStorage.setItem('theme', isDark ? 'dark' : 'light');

        if (label) {
            label.textContent = isDark ? '☀️ Light' : '🌙 Dark';
        }
    }

    (function () {
        const saved = localStorage.getItem('theme');
        const isDark = saved === 'dark';

        document.documentElement.classList.toggle('dark', isDark);

        const checkbox = document.getElementById('themeSwitch');
        const label = document.getElementById('themeLabel');

        if (checkbox) checkbox.checked = isDark;
        if (label) label.textContent = isDark ? '☀️ Light' : '🌙 Dark';
    })();
</script>

</body>
</html>

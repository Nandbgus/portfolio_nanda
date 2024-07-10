<!DOCTYPE html>
<html>

<head>
    <title>Ananda Bagus Fatchurroziq - @yield('title')</title>
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Tambahkan link CSS atau script lainnya di sini -->
</head>

<body class="overflow-hidden">
    <div class="navbar">
        @include('partials.navbar')
    </div>

    <div class="snap-container h-screen overflow-y-scroll">
        @yield('content')
    </div>

    <!-- Tambahkan script JavaScript di sini -->
</body>

</html>
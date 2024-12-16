<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Pintar Nusantara</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <nav>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#kelas">Kelas</a></li>
            <li><a href="#materi">Materi Pembelajaran</a></li>
            <li><a href="#informasi">Informasi</a></li>
            <li><a href="#login">Login</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>

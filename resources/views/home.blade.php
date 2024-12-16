    @extends('layouts.app')

    @section('content')
        <section id="hero">
            <div class="hero-container">
                <div class="hero-left">
                    <img src="{{ asset('img/logo-rpn.png') }}" alt="Logo Rumah Pintar Nusantara" class="logo">
                </div>
                <div class="hero-right">
                    <h1>Hi, Selamat Datang Calon Siswa/Siswi Rumah Pintar Nusantara</h1>
                    <p>Silahkan mendaftar untuk bergabung dengan kami.</p>
                    <a href="#form-section" class="btn">Menuju Form Pendaftaran</a>
                </div>
            </div>
        </section>

        <section id="informasi">
            <h2>Informasi Tentang Kami</h2>
            <p><strong>Sejarah:</strong> Rumah Pintar Nusantara didirikan pada tahun 2020 oleh para pendidik profesional...
            </p>
            <p><strong>Pendiri:</strong> Bapak Pendidikan Nusantara</p>
            <div class="galeri">
                <img src="{{ asset('img/kegiatan1.jpg') }}" alt="Kegiatan 1">
                <img src="{{ asset('img/kegiatan2.jpg') }}" alt="Kegiatan 2">
                <!-- Tambahkan gambar lain -->
            </div>
        </section>
    @endsection

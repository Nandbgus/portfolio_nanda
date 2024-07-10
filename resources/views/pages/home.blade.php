@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style>
    @keyframes slideInLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .hidden-anim {
        opacity: 0;
        transition: opacity 0.5s, transform 0.5s;
    }

    .animate .hero-text {
        animation: slideInLeft 1s ease-out forwards;
    }

    .animate .hero-image {
        animation: slideInRight 1s ease-out forwards;
    }

    .animate .project-title {
        animation: fadeIn 1s ease-out forwards;
    }
</style>

<div id="home" class="snap-section fullscreen hidden-anim">
    <!-- Section dengan Efek Paralaks -->
    <div class="parallax bg-cover bg-center" style="background-image: url('{{ asset('images/pbg.jpeg') }}');">
        <div class="flex justify-center items-center h-full bg-black bg-opacity-50">
            <h1 class="text-4xl font-bold text-white hero-text">Selamat Datang di Halaman Saya</h1>
        </div>
    </div>
</div>

<div id="about" class="snap-section fullscreen hidden-anim">
    <!-- Section Konten Utama -->
    <div class="container mx-auto px-4 py-16 h-full">
        <div class="flex flex-col lg:flex-row items-center lg:items-start h-full">
            <!-- Kiri: Perkenalan dan Deskripsi Diri -->
            <div class="lg:w-1/2 mb-8 lg:mb-0 hero-text">
                <h1 class="text-4xl font-bold mb-4">Halo, Saya Ananda Bagus Fatchurroziq</h1>
                <p class="text-lg mb-4">Saya adalah Mahasiswa Universitas Nusantara PGRI Kediri yang berdedikasi untuk mempelajari ilmu di dunia pemrograman, saya senang belajar apapun itu yang bisa berguna kedepannya.</p>
                <p class="text-lg">Selamat datang di halaman pribadi saya, di mana Anda dapat menemukan informasi tentang keahlian saya dan pengalaman saya.</p>
            </div>
            <!-- Kanan: Gambar Profil -->
            <div class="lg:w-1/2 flex justify-center lg:justify-end hero-image">
                <img src="{{ asset('images/pp.png') }}" alt="Profile Picture" class="h-auto w-96 lg:h-80 lg:w-80 object-cover rounded-full">
            </div>
        </div>
    </div>
</div>

<div id="skills" class="snap-section fullscreen hidden-anim">
    <!-- Section Skills -->
    @include('pages.skills')
</div>

<div class="snap-section fullscreen hidden-anim">
    <!-- Section Proyek dengan Efek Paralaks -->
    <div class="parallax bg-cover bg-center" style="background-image: url('{{ asset('images/p2.jpg') }}');">
        <div class="flex justify-center items-center h-full bg-black bg-opacity-50">
            <h2 class="text-4xl font-bold text-white project-title">Projects</h2>
        </div>
    </div>
</div>

<div id="project" class="snap-section fullscreen hidden-anim">
    <!-- Section Daftar Proyek -->
    <div class="container mx-auto px-4 py-16 h-full">
        @include('pages.project')
    </div>
</div>

<script>
    // Mendeteksi elemen yang masuk ke dalam viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Menambahkan kelas animasi saat elemen masuk ke dalam viewport
                entry.target.classList.add('animate');
                entry.target.classList.remove('hidden-anim');
            }
        });
    }, {
        threshold: 0.5
    }); // Menggunakan threshold untuk menyesuaikan saat animasi muncul

    // Mengamati setiap snap-section
    document.querySelectorAll('.snap-section').forEach(section => {
        observer.observe(section);
    });
</script>

@endsection
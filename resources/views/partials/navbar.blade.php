<!-- resources/views/partials/navbar.blade.php -->
<nav class="flex justify-between items-center p-4 py-8 font-minimalist text-md bg-white fixed w-full z-50 shadow-md">
    <div class="flex items-center gap-4 px-4">
        <!-- Logo -->
        <img src="{{ asset('images/icon.png') }}" alt="Logo" class="w-12">
        <!-- Deskripsi -->
        <div class="text-accent">
            <h1 class="text-2xl font-bold uppercase">Portfolio</h1>
            <p class="text-sm">Deskripsi singkat</p>
        </div>
    </div>
    <ul class="flex gap-4 px-4">
        <li>
            <a href="#home" class="text-accent">Home</a>
        </li>
        <li>
            <a href="#about" class="text-accent">About</a>
        </li>
        <li>
            <a href="#skills" class="text-accent">Skills</a>
        </li>
        <li>
            <a href="#project" class="text-accent">Project</a>
        </li>
    </ul>
</nav>
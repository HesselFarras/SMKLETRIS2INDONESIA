@extends('components.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

    <!-- Hero Section -->
    <section class="relative">
        <img src="/images/hero.jpg" alt="Gedung SMK" class="w-full h-[500px] object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white text-center">
            <img src="/images/logoletris.png" class="w-32 mb-4" alt="Logo">
            <h1 class="text-4xl font-bold">SMK LETRIS INDONESIA 2</h1>
            <a href="{{ route('tentang') }}" class="mt-4 px-6 py-2 bg-white text-black rounded hover:bg-gray-200">Learn More</a>
        </div>
    </section>

    <!-- Info Boxes -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
            <div class="bg-white p-6 shadow rounded">
                <h2 class="text-xl font-semibold mb-2">About</h2>
                <p>SMK Letris Indonesia 2 adalah sekolah yang berkomitmen mencetak lulusan kompeten di bidangnya.</p>
                <a href="{{ route('tentang') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h2 class="text-xl font-semibold mb-2">Fasilitas</h2>
                <p>Fasilitas lengkap mulai dari ruang kelas modern, laboratorium, perpustakaan dan lainnya.</p>
                <a href="#" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h2 class="text-xl font-semibold mb-2">Informasi & Berita</h2>
                <p>Ikuti berita dan update terbaru mengenai kegiatan SMK Letris Indonesia 2.</p>
                <a href="#" class="text-blue-500 mt-2 inline-block">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Fasilitas Carousel -->
    <section id="fasilitas" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6">FASILITAS</h2>
            <div class="relative">
                <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 shadow rounded-full z-10">←</button>
                <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 shadow rounded-full z-10">→</button>

                <div id="carousel" class="flex overflow-x-auto gap-4 scroll-smooth">
                    <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/kelas.jpg" alt="Ruang Kelas" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">RUANG KELAS</div>
                    </div>
                    <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/perpus.jpg" alt="Perpustakaan" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">PERPUSTAKAAN</div>
                    </div>
                    <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                                        <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                                        <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                                        <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                                        <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                                        <div class="min-w-[300px] bg-white shadow rounded overflow-hidden">
                        <img src="/images/lab.jpg" alt="Laboratorium" class="w-full h-48 object-cover">
                        <div class="p-4 font-semibold text-center">LABORATORIUM KOMPUTER</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Profil -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="aspect-w-16 aspect-h-9">
                <iframe class="w-full h-96" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" title="Profil SMK Letris Indonesia 2" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- News & Updates -->
    <section id="berita" class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-6">News & Updates</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow rounded p-4">
                    <img src="/images/event1.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Event 1">
                    <h3 class="font-semibold text-lg">Workshop teknologi generasi Z</h3>
                    <p class="text-sm text-gray-600">21 Juni 2025</p>
                    <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
                </div>
                <div class="bg-white shadow rounded p-4">
                    <img src="/images/event1.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Event 2">
                    <h3 class="font-semibold">Kegiatan siswa</h3>
                    <p class="text-sm">22 Juni 2025 - Siswa aktif dalam kegiatan kewirausahaan dan sosial.</p>
                    <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
                </div>
                <div class="bg-white shadow rounded p-4">
                    <img src="/images/event1.jpg" class="mb-2 w-full h-40 object-cover rounded" alt="Event 3">
                    <h3 class="font-semibold">Organisasi Siswa</h3>
                    <p class="text-sm">Kegiatan organisasi dan pengurus OSIS tahun 2025 aktif dan berprestasi.</p>
                    <a href="{{ route('berita') }}" class="text-blue-500 mt-2 inline-block">Learn More</a>
                </div>
            </div>
        </div>
    </section>
@endsection

<script defer>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.querySelector('#carousel');
            const prev = document.querySelector('#prev');
            const next = document.querySelector('#next');

            prev.addEventListener('click', () => {
                container.scrollBy({ left: -300, behavior: 'smooth' });
            });

            next.addEventListener('click', () => {
                container.scrollBy({ left: 300, behavior: 'smooth' });
            });
        });
    </script>
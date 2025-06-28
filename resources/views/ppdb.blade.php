@extends('components.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<!-- Banner -->
<section class="bg-gray-300 h-64 flex items-center justify-center">
    <h1 class="text-3xl md:text-4xl font-bold">PPDB GELOMBANG 2</h1>
</section>

<!-- Tombol Daftar -->
<div class="text-center my-8">
    <a href="#" class="bg-gray-700 text-white px-6 py-2 rounded hover:bg-gray-800">Pendaftaran</a>
</div>

<!-- Dokumentasi -->
<section class="container mx-auto px-4 my-10">
    <h2 class="text-2xl font-bold mb-4">Dokumentasi</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for ($i = 0; $i < 9; $i++)
            <div class="bg-white shadow rounded p-4">
                <div class="bg-gray-200 h-40 mb-4 flex items-center justify-center">
                    <span class="text-gray-500">Image</span>
                </div>
                <h3 class="font-semibold">Title</h3>
                <p class="text-sm text-gray-600">Deskripsi singkat dari dokumentasi yang ada di sini.</p>
            </div>
        @endfor
    </div>
</section>

<!-- News & Updates -->
<section class="bg-gray-100 py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6">News & Updates</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 bg-white shadow p-4">
                <div class="bg-gray-200 h-40 mb-4 flex items-center justify-center">
                    <span class="text-gray-500">Image</span>
                </div>
                <p class="text-sm text-gray-500">15 Juni 2022</p>
                <h3 class="font-bold text-lg">Workshop tentang teknologi di generasi Z</h3>
                <p class="text-sm text-gray-600">Kegiatan workshop yang diadakan untuk siswa-siswi mengenai perkembangan teknologi saat ini.</p>
            </div>
            <div class="flex flex-col space-y-4">
                <div>
                    <p class="text-sm text-gray-500">4 Juli 2022</p>
                    <p class="text-sm">Kegiatan LDKS di SMK Letris Indonesia 2</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">30 Juni 2022</p>
                    <p class="text-sm">Pelatihan editing fotografi untuk operator kamera</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500">23 Juni 2022</p>
                    <p class="text-sm">PPDB Gelombang 2 telah dibuka</p>
                </div>
                <a href="#" class="text-blue-600 hover:underline text-sm mt-2">Lihat Semua</a>
            </div>
        </div>
    </div>
</section>
@endsection

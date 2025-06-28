@extends('components.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<!-- Hero Section -->
<section class="relative w-full h-[450px] bg-cover bg-center" style="background-image: url('/images/smk.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center flex-col">
        <img src="/images/logo.png" alt="Logo" class="w-32 h-32 mb-4">
        <h1 class="text-white text-4xl font-bold text-center">Tentang</h1>
        <h2 class="text-white text-3xl font-bold text-center">SMK LETRIS INDONESIA 2</h2>
    </div>
</section>

<!-- Tentang Sekolah -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-4">TENTANG LETRIS INDONESIA 2</h2>
        <p class="text-gray-700 leading-relaxed">
            SMK Letris Indonesia 2 merupakan sekolah menengah kejuruan swasta yang berdiri sejak tahun 2000 di bawah naungan Yayasan Letris Indonesia. Sekolah ini bertujuan untuk membentuk lulusan kerja dan berdaya saing tinggi melalui pembelajaran berbasis kurikulum siap industri. Dilengkapi berbagai fasilitas dan program unggulan, SMK Letris Indonesia 2 hadir untuk mendukung pembangunan generasi muda Indonesia yang terampil, disiplin, dan bermartabat.
        </p>
    </div>
</section>

<!-- Fasilitas -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-8">Fasilitas</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ([
                ['img' => 'perpustakaan.jpg', 'title' => 'Perpustakaan'],
                ['img' => 'lab-komputer.jpg', 'title' => 'Laboratorium Komputer'],
                ['img' => 'ruang-kelas.jpg', 'title' => 'Ruang Kelas'],
                ['img' => 'aula.jpg', 'title' => 'Aula Serbaguna'],
                ['img' => 'lapangan.jpg', 'title' => 'Lapangan Olahraga'],
                ['img' => 'kantin.jpg', 'title' => 'Kantin Sekolah']
            ] as $index => $facility)
            <div class="bg-white rounded shadow p-4 {{ $index > 2 ? 'hidden' : '' }} fasilitas-item">
                <img src="/images/{{ $facility['img'] }}" alt="{{ $facility['title'] }}" class="w-full h-40 object-cover rounded mb-3">
                <h3 class="font-bold text-lg mb-2">{{ $facility['title'] }}</h3>
                <p class="text-sm text-gray-600">Fasilitas kami lengkap dan mendukung pembelajaran modern.</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-6">
            <button onclick="toggleFasilitas()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Lihat Semua Fasilitas
            </button>
        </div>
    </div>
</section>


<!-- Guru & Staf Sekolah -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6">Guru & Staf Sekolah</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @for ($i = 0; $i < 9; $i++)
                <div class="bg-gray-100 rounded p-4 text-center {{ $i > 2 ? 'hidden' : '' }} guru-item">
                    <div class="w-full h-40 bg-gray-300 flex items-center justify-center mb-3">Foto</div>
                    <h4 class="font-semibold">Nama Guru {{ $i + 1 }}</h4>
                    <p class="text-sm text-gray-600">Mapel / Jabatan</p>
                </div>
            @endfor
        </div>

        <div class="text-center mt-6">
            <button onclick="toggleGuru()" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Lihat Semua Guru
            </button>
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

<script>
    let fasilitasShown = false;
    let guruShown = false;

    function toggleFasilitas() {
        fasilitasShown = !fasilitasShown;
        document.querySelectorAll('.fasilitas-item').forEach((el, index) => {
            if (index > 2) {
                el.classList.toggle('hidden', !fasilitasShown);
            }
        });
        event.target.innerText = fasilitasShown ? 'Tutup' : 'Lihat Semua Fasilitas';
    }

    function toggleGuru() {
        guruShown = !guruShown;
        document.querySelectorAll('.guru-item').forEach((el, index) => {
            if (index > 2) {
                el.classList.toggle('hidden', !guruShown);
            }
        });
        event.target.innerText = guruShown ? 'Tutup' : 'Lihat Semua Guru';
    }
</script>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data statis untuk homepage
        $berita = [
            [
                'judul' => 'Siswa SMK Letris 2 Juara Kompetisi Web Design Tingkat Nasional',
                'tanggal' => '10 April 2025',
                'ringkasan' => 'Tim siswa jurusan RPL berhasil menyabet juara pertama dalam kompetisi web design...',
                'gambar' => 'berita1.jpg'
            ],
            [
                'judul' => 'Workshop Industri 4.0 untuk Guru dan Siswa',
                'tanggal' => '5 April 2025',
                'ringkasan' => 'SMK Letris 2 mengadakan workshop tentang teknologi industri 4.0 untuk meningkatkan kompetensi...',
                'gambar' => 'berita2.jpg'
            ],
            [
                'judul' => 'Kunjungan Industri ke PT Global Tech Indonesia',
                'tanggal' => '28 Maret 2025',
                'ringkasan' => 'Siswa dari berbagai jurusan melakukan kunjungan industri untuk memperluas wawasan...',
                'gambar' => 'berita3.jpg'
            ],
        ];

        $jurusan = [
            [
                'nama' => 'Rekayasa Perangkat Lunak (RPL)',
                'deskripsi' => 'Jurusan yang berfokus pada pengembangan aplikasi, website, dan sistem informasi.',
                'icon' => 'fas fa-laptop-code'
            ],
            [
                'nama' => 'Teknik Komputer Jaringan (TKJ)',
                'deskripsi' => 'Jurusan yang mempelajari tentang jaringan komputer, administrasi server dan keamanan jaringan.',
                'icon' => 'fas fa-network-wired'
            ],
            [
                'nama' => 'Multimedia',
                'deskripsi' => 'Jurusan yang mempelajari desain grafis, animasi, video editing dan produksi multimedia.',
                'icon' => 'fas fa-photo-video'
            ],
            [
                'nama' => 'Administrasi Perkantoran',
                'deskripsi' => 'Jurusan yang mempelajari manajemen kantor, korespondensi, dan administrasi bisnis.',
                'icon' => 'fas fa-briefcase'
            ],
            [
                'nama' => 'Akuntansi',
                'deskripsi' => 'Jurusan yang mempelajari pembukuan, perpajakan, dan pelaporan keuangan.',
                'icon' => 'fas fa-calculator'
            ],
        ];

        $testimonial = [
            [
                'nama' => 'Budi Santoso',
                'posisi' => 'Alumni 2022, Software Engineer di Tokopedia',
                'teks' => 'Berkat ilmu yang saya peroleh di SMK Letris 2, saya berhasil mendapatkan pekerjaan impian saya.',
                'foto' => 'alumni1.jpg'
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'posisi' => 'Alumni 2023, Network Administrator di Telkom Indonesia',
                'teks' => 'SMK Letris 2 memberikan dasar yang kuat untuk karir saya di bidang jaringan.',
                'foto' => 'alumni2.jpg'
            ],
            [
                'nama' => 'Andi Wijaya',
                'posisi' => 'Alumni 2021, UI/UX Designer di Gojek',
                'teks' => 'Kurikulum yang diajarkan sangat relevan dengan kebutuhan industri saat ini.',
                'foto' => 'alumni3.jpg'
            ],
        ];

        $fasilitas = [
            [
                'nama' => 'Laboratorium Komputer',
                'deskripsi' => 'Dilengkapi dengan komputer spesifikasi tinggi dan software terkini',
                'gambar' => 'lab-komputer.jpg'
            ],
            [
                'nama' => 'Studio Multimedia',
                'deskripsi' => 'Studio profesional untuk produksi audio, video, dan desain grafis',
                'gambar' => 'studio.jpg'
            ],
            [
                'nama' => 'Perpustakaan Digital',
                'deskripsi' => 'Akses ke ribuan buku digital dan sumber belajar online',
                'gambar' => 'perpustakaan.jpg'
            ],
            [
                'nama' => 'Ruang Praktik Bisnis',
                'deskripsi' => 'Simulasi lingkungan bisnis untuk pembelajaran praktis',
                'gambar' => 'praktik-bisnis.jpg'
            ],
        ];

        $prestasi = [
            'Juara 1 Lomba Web Design tingkat Provinsi 2024',
            'Juara 2 Lomba Kompetensi Siswa Bidang Akuntansi 2024',
            'Juara 3 Kompetisi Jaringan Nasional 2023',
            'Finalis Olimpiade Sains Terapan Nasional 2023',
            'Best Innovation Award pada Pameran Teknologi Siswa 2024',
        ];

        return view('home', compact('berita', 'jurusan', 'testimonial', 'fasilitas', 'prestasi'));
    }
}
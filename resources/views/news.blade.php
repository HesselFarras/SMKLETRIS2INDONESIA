@extends('components.layout')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="bg-white py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-10">News & Updates</h2>

        {{-- Hero News --}}
        <div class="w-full mb-10">
            <div class="bg-gray-200 h-64 flex items-center justify-center">
                <span class="text-gray-400">[Gambar Utama]</span>
            </div>
        </div>

        {{-- Grid News --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

            {{-- Large News Item --}}
            <div class="md:col-span-2 flex border border-blue-400 p-4">
                <div class="w-1/2">
                    <h3 class="font-bold">Text</h3>
                    <p class="text-sm text-gray-600">News</p>
                    <p class="text-xs text-gray-500">Body text</p>
                </div>
                <div class="w-1/2 bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-400">[Img]</span>
                </div>
            </div>

            {{-- Small News Item --}}
            <div class="border p-4 bg-white">
                <div class="bg-gray-200 h-32 mb-2 flex items-center justify-center">
                    <span class="text-gray-400">[Img]</span>
                </div>
                <h3 class="text-sm font-semibold">Text</h3>
                <p class="text-xs text-gray-500">Body text</p>
            </div>

            {{-- 3 more items --}}
            @for ($i = 0; $i < 3; $i++)
                <div class="border p-4 bg-white">
                    <div class="bg-gray-200 h-32 mb-2 flex items-center justify-center">
                        <span class="text-gray-400">[Img]</span>
                    </div>
                    <h3 class="text-sm font-semibold">Text</h3>
                    <p class="text-xs text-gray-500">Body text</p>
                </div>
            @endfor

        </div>

        {{-- Bottom List Section --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
            {{-- Left card --}}
            <div class="md:col-span-1 border bg-white p-4">
                <div class="bg-gray-200 h-40 mb-4 flex items-center justify-center">
                    <span class="text-gray-400">[Img]</span>
                </div>
                <div class="text-sm text-gray-700">
                    <p class="mb-2 text-xs text-gray-500">15 Mei 2024</p>
                    <h4 class="font-semibold">Workshop tentang teknologi di generasi Z</h4>
                    <p class="text-xs mt-1">Diskusi seru dan praktik bersama mengenal teknologi dan berkolaborasi.</p>
                </div>
            </div>

            {{-- Right list --}}
            <div class="md:col-span-2 flex flex-col gap-4">
                <div class="text-sm border-b pb-2">
                    <p class="text-xs text-gray-500">03 Juni 2024</p>
                    <p class="font-medium">Kegiatan School Visit ke SMK Letris Indonesia 2 bersama Samsung</p>
                </div>
                <div class="text-sm border-b pb-2">
                    <p class="text-xs text-gray-500">13 Mei 2024</p>
                    <p class="font-medium">Pelatihan teknis fotografi oleh operator kamera</p>
                </div>
                <div class="text-sm">
                    <p class="text-xs text-gray-500">22 April 2024</p>
                    <p class="font-medium">Wisuda XXII SMK Letris Indonesia 2</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

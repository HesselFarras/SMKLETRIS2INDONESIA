<script src="https://cdn.tailwindcss.com"></script>

<section class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 uppercase">KONTAK SMK LETRIS 2 INDONESIA</h2>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Form Kontak -->
            <div>
                <h3 class="text-lg font-semibold mb-4 text-blue-800">Contact SMK LETRIS 2 INDONESIA</h3>
                <form class="space-y-4">
                    <div>
                        <input type="text" placeholder="Your Name" class="w-full border border-gray-300 rounded px-4 py-2" />
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" class="w-full border border-gray-300 rounded px-4 py-2" />
                    </div>
                    <div>
                        <input type="text" placeholder="Your Phone" class="w-full border border-gray-300 rounded px-4 py-2" />
                    </div>
                    <div>
                        <select class="w-full border border-gray-300 rounded px-4 py-2">
                            <option>Student Admission / Penerimaan Siswa Baru</option>
                        </select>
                    </div>
                    <div>
                        <textarea rows="4" placeholder="Details" class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-700 text-white px-6 py-2 rounded">Submit</button>
                    </div>
                </form>

                <!-- Info Kontak -->
                <div class="mt-6 space-y-2 text-sm">
                    <p><strong>Address:</strong> Jl. Raya Siliwangi No.55, Pondok Benda, Tangerang Selatan, Banten</p>
                    <p><strong>Working Hours:</strong> Monday-Friday (8.00 am to 4.00 pm)</p>
                    <p><strong>Telephone:</strong> 0851-6186-7926</p>
                    <p><strong>Email (Hotline):</strong> smkletris2020@gmail.com</p>
                </div>
            </div>

            <!-- Google Map -->
            <div>
                <iframe class="w-full h-96 border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.375221368461!2d106.71348537507359!3d-6.34543169364439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e582501b86cb%3A0xe17c81c2758ace13!2sSMK%20Letris%20Indonesia%202%20%26%20SMK%20Kesehatan%20Letris%20Indonesia%202!5e0!3m2!1sid!2sid!4v1751096328512!5m2!1sid!2sid" allowfullscreen></iframe>
            </div>
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

<footer class="bg-slate-900 text-white py-6">
    <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="/images/logoletris.png" class="w-10 h-10" alt="Logo">
            <span class= "font-bold text-lg">SMK Letris Indonesia 2</span>
        </div>
        <div class="mt-4 md:mt-0 space-x-4">
            <a href="mailto:smkletris2020@gmail.com" class="hover:underline">Email</a>
            <a href="https://www.tiktok.com/@letrisindonesia2official" class="hover:underline">Tiktok</a>
            <a href="https://www.instagram.com/letrisindonesia2official?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="hover:underline">Instagram</a>
            <a href="https://www.youtube.com/@letrisIndonesia2official" class="hover:underline">YouTube</a>
        </div>
    </div>
</footer>

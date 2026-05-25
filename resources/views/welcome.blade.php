<x-app-layout>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <header id="beranda" class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-12 md:py-16 scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 tracking-tight">PUSAT KOST</h1>
            <p class="text-blue-100 text-base md:text-lg max-w-2xl mx-auto mb-8 font-medium">
                Platform pencarian kost bagi masyarakat umum dan mahasiswa Unsulbar.
            </p>

            <div class="max-w-2xl mx-auto">
                <form action="#" method="GET" class="flex gap-2 p-2 bg-white rounded-xl shadow-lg border border-gray-100">
                    <div class="flex-1 flex items-center px-2">
                        <svg class="w-5 h-5 text-gray-400 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" name="search" placeholder="Cari nama kost, alamat, kecamatan, atau harga..." class="w-full border-0 focus:ring-0 text-gray-800 placeholder-gray-400 px-3 text-sm h-10">
                    </div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-sm px-6 h-11 rounded-lg shadow transition whitespace-nowrap">Cari Sekarang</button>
                </form>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Rekomendasi Kost Terbaru</h2>
                <p class="text-sm text-gray-500 mt-1">Menampilkan total 4 properti kost tersedia.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col group">
                <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                    <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 italic bg-gray-200">
                        <span class="text-xs font-medium">belum ada foto</span>
                    </div>
                    <div class="absolute top-3 left-3 flex flex-col gap-1.5">
                        <span class="inline-flex items-center text-xs font-bold bg-blue-600 text-white px-2.5 py-1 rounded-md shadow-sm">Sekitar Unsulbar</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <span class="text-xl font-bold text-blue-600 mb-1">Rp 550.000<span class="text-xs font-medium text-gray-500"> / bulan</span></span>
                    <h3 class="font-bold text-gray-800 text-base mb-1 line-clamp-1">Kost Berkah Utama Putra</h3>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Majene</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Banggae Timur</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Tande-Tande</span>
                    </div>
                    <p class="text-xs text-gray-500 mb-4 line-clamp-2 flex-1">Jl. Prof. Dr. Baharuddin Lopa, dekat kampus baru Unsulbar.</p>
                    <div class="grid grid-cols-2 gap-2 pt-3 border-t border-gray-100">
                     <a href="{{ url('/kost/detail-dummy') }}" class="inline-flex items-center justify-center h-9 text-xs font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">Detail</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center h-9 text-xs font-bold text-white bg-emerald-500 hover:bg-emerald-600 rounded-lg transition">Hubungi</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col group">
                <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                    <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 italic bg-gray-200">
                        <span class="text-xs font-medium">belum ada foto</span>
                    </div>
                    <div class="absolute top-3 left-3 flex flex-col gap-1.5">
                        <span class="inline-flex items-center text-xs font-bold bg-blue-600 text-white px-2.5 py-1 rounded-md shadow-sm">Sekitar Unsulbar</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <span class="text-xl font-bold text-blue-600 mb-1">Rp 600.000<span class="text-xs font-medium text-gray-500"> / bulan</span></span>
                    <h3 class="font-bold text-gray-800 text-base mb-1 line-clamp-1">Kost Muslimah Padzila</h3>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Majene</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Banggae</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Galung</span>
                    </div>
                    <p class="text-xs text-gray-500 mb-4 line-clamp-2 flex-1">Area Lutang, lingkungan tenang, khusus mahasiswi.</p>
                    <div class="grid grid-cols-2 gap-2 pt-3 border-t border-gray-100">
                        <a href="{{ url('/kost/detail-dummy') }}" class="inline-flex items-center justify-center h-9 text-xs font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">Detail</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center h-9 text-xs font-bold text-white bg-emerald-500 hover:bg-emerald-600 rounded-lg transition">Hubungi</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col group">
                <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                    <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 italic bg-gray-200">
                        <span class="text-xs font-medium">belum ada foto</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <span class="text-xl font-bold text-blue-600 mb-1">Rp 450.000<span class="text-xs font-medium text-gray-500"> / bulan</span></span>
                    <h3 class="font-bold text-gray-800 text-base mb-1 line-clamp-1">Pondok Orange Majene</h3>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Majene</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Banggae Timur</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Labuang</span>
                    </div>
                    <p class="text-xs text-gray-500 mb-4 line-clamp-2 flex-1">Dekat pusat kota, akses motor mudah, aman dan bersih.</p>
                    <div class="grid grid-cols-2 gap-2 pt-3 border-t border-gray-100">
                      <a href="{{ url('/kost/detail-dummy') }}" class="inline-flex items-center justify-center h-9 text-xs font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">Detail</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center h-9 text-xs font-bold text-white bg-emerald-500 hover:bg-emerald-600 rounded-lg transition">Hubungi</a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col group">
                <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                    <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 italic bg-gray-200">
                        <span class="text-xs font-medium">belum ada foto</span>
                    </div>
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <span class="text-xl font-bold text-blue-600 mb-1">Rp 700.000<span class="text-xs font-medium text-gray-500"> / bulan</span></span>
                    <h3 class="font-bold text-gray-800 text-base mb-1 line-clamp-1">Kost Eksklusif Simfoni</h3>
                    <div class="flex flex-wrap gap-1 mb-3">
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Majene</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Banggae Timur</span>
                        <span class="bg-gray-100 text-gray-600 text-[10px] font-semibold px-2 py-0.5 rounded">Tande</span>
                    </div>
                    <p class="text-xs text-gray-500 mb-4 line-clamp-2 flex-1">Kamar mandi dalam, sudah termasuk kasur dan lemari pakaian.</p>
                    <div class="grid grid-cols-2 gap-2 pt-3 border-t border-gray-100">
                        <a href="{{ url('/kost/detail-dummy') }}" class="inline-flex items-center justify-center h-9 text-xs font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg transition">Detail</a>
                        <a href="https://wa.me/6281234567890" target="_blank" class="inline-flex items-center justify-center h-9 text-xs font-bold text-white bg-emerald-500 hover:bg-emerald-600 rounded-lg transition">Hubungi</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 flex justify-center">
            <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                <span class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500"> Previous </span>
                <span class="relative inline-flex items-center px-4 py-2 border border-blue-600 bg-blue-50 text-sm font-medium text-blue-600"> 1 </span>
                <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 rounded-r-md"> Next </span>
            </nav>
        </div>
    </div>

    <section id="tentang" class="bg-white border-t border-gray-200 py-16 scroll-mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight mb-4">Tentang PusatKost</h2>
            <div class="w-16 h-1 bg-blue-600 mx-auto mb-6 rounded"></div>
            <p class="text-gray-600 leading-relaxed text-base max-w-2xl mx-auto mb-8">
                PusatKost adalah platform penyedia informasi kost. Kami mempermudah mendapatkan kosan, dan sudah melalui verifikasi kelayakan administratif dari pihak pengelola .
            </p>
            <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6 inline-flex flex-col sm:flex-row items-center gap-4 shadow-sm">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center shadow-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L22 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="text-left">
                    <h4 class="font-bold text-gray-900 text-sm">Hubungi Layanan Bantuan Admin</h4>
                    <p class="text-xs text-gray-500 mt-0.5">Punya pertanyaan atau keluhan seputar sistem? Kirim surel Anda ke:</p>
                    <p class="text-black-600 font-bold text-base hover:underline mt-1 block">ijlalcode@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
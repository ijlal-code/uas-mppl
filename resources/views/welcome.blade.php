<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Kost</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="top" class="antialiased bg-gray-100 min-h-screen">
    <nav class="bg-white shadow px-6 py-4 sticky top-0 z-50">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <a href="#top" class="text-2xl font-bold text-blue-600">PusatKost</a>
                
                <div class="hidden md:flex space-x-6">
                    <a href="#top" class="text-gray-700 hover:text-blue-600 font-semibold transition border-b-2 border-transparent hover:border-blue-600 pb-1">
                        Beranda
                    </a>
                    <a href="#tentang" class="text-gray-700 hover:text-blue-600 font-semibold transition border-b-2 border-transparent hover:border-blue-600 pb-1">
                        Tentang
                    </a>
                </div>
            </div>

            <div class="hidden md:block">
                @auth
                    @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-blue-600 font-semibold">Dashboard Admin</a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 font-semibold">Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-semibold mr-4">Log in</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Register</a>
                @endauth
            </div>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden mt-4 flex flex-col space-y-3 pb-3 border-t pt-3 border-gray-200">
            <a href="#top" class="text-gray-700 hover:text-blue-600 font-semibold block">Beranda</a>
            <a href="#tentang" class="text-gray-700 hover:text-blue-600 font-semibold block">Tentang</a>
            
            <div class="border-t border-gray-200 pt-3 flex flex-col space-y-3">
                @auth
                    @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-blue-600 font-semibold block">Dashboard Admin</a>
                    @else
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-600 font-semibold block">Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600 font-semibold block">Log in</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition inline-block text-center w-full">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <header class="bg-blue-600 text-white text-center py-16 px-4">
        <h1 class="text-4xl font-bold mb-4">Cari Kost Nyaman & Aman</h1>
        <p class="text-lg mb-8">Temukan informasi kost terbaik di sekitar Anda dengan mudah.</p>
        <form action="{{ route('home') }}" method="GET" class="max-w-2xl mx-auto flex flex-col sm:flex-row gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama, alamat, atau harga..." class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none">
            <div class="flex gap-2 w-full sm:w-auto">
                <button type="submit" class="w-full sm:w-auto bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-md font-bold transition">Cari</button>
                
                @if(request('search'))
                    <a href="{{ route('home') }}" class="w-full sm:w-auto text-center bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-md font-bold transition">Reset</a>
                @endif
            </div>
        </form>
    </header>

    <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        @if(request('search'))
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Hasil Pencarian: <span class="text-blue-600">"{{ request('search') }}"</span></h2>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($kosts as $k)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                   @if($k->foto)
                        <img src="{{ asset('storage/'.$k->foto) }}" alt="Foto Kost" class="w-full h-48 object-cover">
                    @else
                        <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 italic">
                            Belum ada foto
                        </div>
                    @endif
                   
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h2 class="text-xl font-bold text-gray-800">{{ $k->nama }}</h2>
                        </div>
                        <p class="text-blue-600 font-bold text-lg mb-2">Rp {{ number_format($k->harga, 0, ',', '.') }} / bulan</p>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2"><span class="font-semibold">Lokasi:</span> {{ $k->alamat }}</p>
                        <a href="{{ route('kost.show.public', $k->id) }}" class="block w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-2 rounded-md transition border border-gray-300">Lihat Detail</a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center bg-white rounded-lg border border-dashed border-gray-300 py-12">
                    <h3 class="text-lg font-medium text-gray-900">Kost tidak ditemukan</h3>
                    <p class="text-gray-500 mt-1">Silakan coba kata kunci lain atau reset pencarian Anda.</p>
                </div>
            @endforelse
        </div>
        
        <div class="mt-8">
            {{ $kosts->links() }}
        </div>
    </main>

    <section id="tentang" class="bg-white py-16 border-t border-gray-200 mt-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Tentang Kami</h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                Platform ini dibangun untuk membantu para mahasiswa, pekerja, dan pencari tempat tinggal agar dengan mudah menemukan hunian kost yang sesuai dengan kebutuhan dan anggaran. Kami juga memfasilitasi para pemilik properti untuk menjangkau penyewa dengan lebih cepat dan aman.
            </p>
            
            <div class="bg-gray-50 rounded-xl shadow-sm border border-gray-200 p-8 inline-block mt-4">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Butuh Bantuan?</h3>
                <p class="text-gray-600 mb-4 text-sm">Jika Anda menemui kendala teknis, memiliki saran, atau menemukan masalah pada website, hubungi admin kami melalui email:</p>
                <a class="inline-block text-blue-600 text-lg font-semibold hover:text-blue-800 hover:underline transition">
                    ijlalcode@gmail.com
                </a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-gray-400 py-8 text-center">
        <p>&copy; {{ date('Y') }} PusatKost. Hak Cipta Dilindungi.</p>
    </footer>

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
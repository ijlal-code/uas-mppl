<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kost;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder Akun Superadmin
        User::create([
            'name' => 'Superadmin Kost',
            'email' => 'superadmin@mppl.com',
            'password' => Hash::make('password123'), // Password untuk login
            'role' => 'superadmin',
        ]);
        
        // 1. Buat 1 User dummy (Pemilik Kost)
        // Jika Anda menggunakan factory, pastikan UserFactory sudah berjalan dengan baik.
        // Jika tidak memakai factory, Anda bisa menggunakan User::create([...]) seperti superadmin.
        $user = User::create([
            'name' => 'Budi Pemilik Kost',
            'email' => 'budi@example.com',
            'password' => Hash::make('password'), // Password login: password
            'role' => 'user', // Set role sebagai user biasa
        ]);

        // Beberapa variasi fasilitas agar data tidak semuanya persis sama
        $variasiFasilitas = [
            "- AC\n- Kamar Mandi Dalam (Shower & Closet Duduk)\n- WiFi High Speed\n- Kasur Springbed & Lemari Pakaian\n- Dapur Umum",
            "- Kipas Angin\n- Kamar Mandi Luar\n- Kasur & Meja Belajar\n- Parkir Motor Luas\n- Jemuran Pakaian",
            "- Full Furnished\n- Smart TV & AC\n- Water Heater\n- Kolam Renang Bersama\n- Gym Area"
        ];

        // 2. Buat 25 data Kost dummy yang terhubung dengan user Budi menggunakan perulangan
        for ($i = 1; $i <= 25; $i++) {
            $user->kosts()->create([
                'nama' => 'Kost Dummy Ke-' . $i,
                'harga' => rand(6, 25) * 100000, // Menghasilkan harga acak antara Rp 600.000 s/d Rp 2.500.000
                'deskripsi' => 'Ini adalah deskripsi otomatis untuk kost dummy ke-' . $i . '. Lingkungan sangat asri dan ramah, cocok untuk mahasiswa atau pekerja. Lokasi strategis dekat fasilitas umum.',
                'fasilitas' => $variasiFasilitas[array_rand($variasiFasilitas)], // Mengambil fasilitas secara acak dari array di atas
                'alamat' => 'Jl. Mawar Merah No. ' . $i . ', Kota Dummy, Indonesia',
                'foto' => null, // null agar menggunakan placeholder di tampilan
                'whatsapp' => '0812345678' . str_pad($i, 2, '0', STR_PAD_LEFT), // Menghasilkan nomor WA unik
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\Kost;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gunakan Faker dengan pengaturan bahasa Indonesia
        $faker = Faker::create('id_ID');

        // Kita ambil User dengan role 'pemilik_kost' 
        // Sebagai simulasi bahwa user inilah yang memiliki ke-25 kost tersebut
        $pemilik = User::where('role', 'pemilik kost')->first();

        // Jika tidak ada user dengan role pemilik_kost, kita buat 1 secara otomatis
        if (!$pemilik) {
            $pemilik = User::create([
                'name' => 'Pemilik Kost Dummy',
                'email' => 'pemilik@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'pemilik kost',
            ]);
        }

        // Variasi lokasi riil di sekitar Unsulbar (Kab. Majene)
        $lokasiSekitarKampus = [
            ['kecamatan' => 'Banggae', 'kelurahan' => 'Banggae'],
            ['kecamatan' => 'Banggae', 'kelurahan' => 'Pangali-Ali'],
            ['kecamatan' => 'Banggae Timur', 'kelurahan' => 'Lembang'],
            ['kecamatan' => 'Banggae Timur', 'kelurahan' => 'Baurung'],
            ['kecamatan' => 'Banggae Timur', 'kelurahan' => 'Baruga'],
        ];

        // Variasi fasilitas Kost
        $opsiFasilitas = [
            'Kasur, Lemari, Kipas Angin, Kamar Mandi Dalam, WiFi',
            'Kasur, Lemari, Kamar Mandi Luar, Dapur Bersama, Parkir Motor',
            'Kasur, Lemari, AC, Kamar Mandi Dalam, WiFi, Dapur Bersama, Keamanan 24 Jam',
            'Kasur, Meja Belajar, Lemari, Kamar Mandi Luar, Jemuran Luas',
            'Kamar Kosong, Listrik Token Sendiri, Kamar Mandi Dalam'
        ];

        // Looping untuk membuat 25 data Kost
        for ($i = 1; $i <= 25; $i++) {
            
            // Kita buat peluang 70% kost berada di sekitar Unsulbar, 30% di luar
            $isSekitarUnsulbar = $faker->boolean(70); 
            
            $lokasi = $faker->randomElement($lokasiSekitarKampus);

            Kost::create([
                'user_id'             => $pemilik->id,
                'nama'                => 'Kost ' . $faker->firstName() . ' ' . $faker->randomElement(['Putra', 'Putri', 'Campur']),
                'harga'               => $faker->numberBetween(3, 15) * 100000, // Harga acak kelipatan 100rb (300.000 - 1.500.000)
                'deskripsi'           => $faker->paragraph(2), // Deskripsi acak 2 paragraf
                'fasilitas'           => $faker->randomElement($opsiFasilitas),
                'kota'                => 'Majene', // Default kota
                'kecamatan'           => $isSekitarUnsulbar ? $lokasi['kecamatan'] : 'Pamboang', // Jika tidak di Unsulbar, taruh di Pamboang
                'kelurahan'           => $isSekitarUnsulbar ? $lokasi['kelurahan'] : 'Simbang',
                'alamat'              => $faker->streetAddress(),
                'is_sekitar_unsulbar' => $isSekitarUnsulbar,
                
                // Jika dia klaim sekitar unsulbar, kita set 80% sudah diverifikasi Superadmin, sisanya belum (untuk ditest)
                'is_verified'         => $isSekitarUnsulbar ? $faker->boolean(80) : false, 
                
                'foto'                => null, // Sengaja dikosongkan agar tidak ada error gambar "broken" di view
                'whatsapp'            => '08' . $faker->randomNumber(5, true) . $faker->randomNumber(5, true), // Nomor WA acak (format 08...)
            ]);
        }
    }
}
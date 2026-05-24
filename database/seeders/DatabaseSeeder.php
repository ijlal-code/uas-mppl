<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Superadmin
        User::updateOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'role' => 'superadmin',
            ]
        );

        // 2. Akun Umum / Pemilik Kost
        User::updateOrCreate(
            ['email' => 'umum@gmail.com'],
            [
                'name' => 'Umum',
                'password' => Hash::make('password'),
                'role' => 'umum',
            ]
        );
        // Pemilik Kost
        User::updateOrCreate(
            ['email' => 'kost@gmail.com'],
            [
                'name' => 'Pemilik Kost',
                'password' => Hash::make('password'),
                'role' => 'pemilik kost',
            ]
        );

        // 3. Akun Mahasiswa Unsulbar
        User::updateOrCreate(
            ['email' => 'mahasiswa@gmail.com'],
            [
                'name' => 'Mahasiswa Unsulbar',
                'password' => Hash::make('password'),
                'role' => 'mahasiswa unsulbar',
            ]
        );
        
        // Panggil KostSeeder untuk men-generate 25 Kost
        $this->call([
            KostSeeder::class,
        ]);
    }
}
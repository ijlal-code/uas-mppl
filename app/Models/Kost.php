<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    // Tambahkan kota, kecamatan, kelurahan, is_sekitar_unsulbar, dan is_verified
    protected $fillable = [
        'user_id', 'nama', 'harga', 'deskripsi', 'fasilitas', 'kota', 'kecamatan', 'kelurahan', 'alamat', 'is_sekitar_unsulbar', 'is_verified', 'foto', 'whatsapp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
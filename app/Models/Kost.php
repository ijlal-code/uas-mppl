<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nama', 'harga', 'deskripsi', 'fasilitas', 'alamat', 'foto', 'whatsapp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
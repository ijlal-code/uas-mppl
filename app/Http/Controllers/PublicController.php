<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index(Request $request)
    {
        $query = Kost::with('user');

        // LOGIKA FILTER UNTUK MAHASISWA UNSULBAR
        if (Auth::check() && Auth::user()->role === 'mahasiswa unsulbar') {
            $query->where('is_sekitar_unsulbar', 1)
                  ->where('is_verified', 1);
        }

        // Fitur Pencarian 
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('alamat', 'like', "%{$search}%")
                  ->orWhere('kota', 'like', "%{$search}%")
                  ->orWhere('kecamatan', 'like', "%{$search}%")
                  ->orWhere('kelurahan', 'like', "%{$search}%")
                  ->orWhere('harga', 'like', "%{$search}%");
            });
        }

        $kosts = $query->latest()->paginate(20);
        $kosts->appends($request->all());

        return view('welcome', compact('kosts'));
    }

    public function show(Kost $kost)
    {
        return view('kost.show', compact('kost'));
    }
}
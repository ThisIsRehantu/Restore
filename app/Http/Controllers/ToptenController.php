<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use App\Models\Seting;
use App\Models\Pembelian;
use App\Models\User;
class ToptenController extends Controller
{
   public function create() {
    $users = DB::table('users')
        ->limit(10)
        ->get();

    $totalOrders = Pembelian::select(DB::raw('username, COUNT(*) as total_order'))
        ->groupBy('username')
        ->orderByDesc('total_order')
        ->get();
        
    $layanans = DB::table('layanans')
        ->limit(10)
        ->get();
        
    $toplayanans = Pembelian::select(DB::raw('layanan, COUNT(*) as top_layanan'))
        ->groupBy('layanan')
        ->orderByDesc('top_layanan')
        ->limit(10)
        ->get();
        
        return view('components.topten', [
            'totalOrders' => $totalOrders,
            'toplayanans' => $toplayanans,
            'banner' => Berita::where('tipe', 'banner')->get(),
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'popup' => Berita::where('tipe', 'popup')->latest()->first()
        ]);
    }
    
    
}
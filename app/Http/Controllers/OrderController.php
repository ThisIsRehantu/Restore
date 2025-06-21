<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Pembayaran;
use App\Models\Voucher;
use App\Models\Pembelian;
use App\Models\User;
use App\Models\Berita;
use App\Models\Paket;
use App\Models\PaketLayanan;
use App\Models\Method;
use Illuminate\Support\Str;
use App\Http\Controllers\TriPayController;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiCheckController;
use App\Http\Controllers\SmileOneController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\AlpharamzController;
use App\Http\Controllers\MethodController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    
     public function create(Kategori $kategori)
    {
       $data = Kategori::where('kode', $kategori->kode)->where('status', 'active')->select('nama', 'server_id', 'thumbnail', 'id', 'kode', 'petunjuk', 'bannerlayanan', 'ket_layanan','tipe')->first();
        if($data == null) return back();
        
        if(Auth::check()){
            if(Auth::user()->role == "Member"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_member AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->orderBy('harga', 'asc')->get();
            }else if(Auth::user()->role == "Platinum"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_platinum AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->orderBy('harga', 'asc')->get();
            }else if(Auth::user()->role == "Gold" || Auth::user()->role == "Admin"){
                $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan','product_logo', 'harga_gold AS harga', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->orderBy('harga', 'asc')->get();
            }
        }else{
              $layanan = Layanan::where('kategori_id', $data->id)->where('status', 'available')->select('id', 'layanan', 'harga', 'product_logo', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->orderBy('harga', 'asc')->get();
        }  
        
        $pakets = [];
        foreach (Paket::all() as $paket) {
            $lyns = $paket->layanan;
            $l = [];
            foreach ($lyns as $lyn) {
                if ($lyn->kategori_id == $data->id) {
                    array_push($l, $lyn);
                }
            }
            if (!empty($l)) {
                array_push($pakets,[
                    'nama'=>$paket->nama,
                    'id'=>$paket->id,
                    'image'=>$paket->image,
                    'layanan'=>$l
                ]);
            }
        }
        
        return view('components.order_v2', [
            'title' => $data->nama,
            'kategori' => $data,
            'nominal' => $layanan,
            'pakets' => $pakets,
            'harga' => $layanan,
            'harga_coret' => $layanan,
            'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
            'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first(),
            'pay_method' => \App\Models\Method::all()
        ]);
    }

    public function price(Request $request)
    {
        if($request->ktg_tipe !== 'joki'){
            $request->validate([
                'nominal' => 'required'
            ]);
        }else{
        
            $request->validate([
                'nominal' => 'required',
                'jumlah_joki' => 'required'
            ]);
        
        }
        if(Auth::check()){
            if(Auth::user()->role == "Member"){
                $data = Layanan::where('id', $request->nominal)->select('harga_member AS harga', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->first();    
            }else if(Auth::user()->role == "Platinum"){
                $data = Layanan::where('id', $request->nominal)->select('harga_platinum AS harga', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->first();
            }else if(Auth::user()->role == "Gold" || Auth::user()->role == "Admin"){
                $data = Layanan::where('id', $request->nominal)->select('harga_gold AS harga', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->first();    
            }
        }else{
            $data = Layanan::where('id', $request->nominal)->select('harga AS harga', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_flash_salee')->first();
        }  
        
        if($data->is_flash_sale == 1 && $data->expired_flash_sale >= date('Y-m-d')){
            
            $data->harga = $data->harga_flash_salee;
            
        }
        
        if(isset($request->voucher)){
            $voucher = Voucher::where('kode', $request->voucher)->first();
            
            if(!$voucher){
                $data->harga = $data->harga;
            }else{
                if($voucher->stock == 0){
                    $data->harga = $data->harga;
                }else{
                    $potongan = $data->harga * ($voucher->promo / 100);
                    if($potongan > $voucher->max_potongan){
                        $potongan = $voucher->max_potongan;
                    }
                    
                    $data->harga = $data->harga - $potongan;
                }
            }
            
        }
        if($request->ktg_tipe == 'joki'){
            $data->harga = $request->jumlah_joki * $data->harga;
        } else {
            $data->harga = 1 * $data->harga;
        }

        return response()->json([
            'status' => true,
            'harga' => "Rp. ".number_format($data->harga, 0, '.', ',')
        ]);
    }


 
    public function confirm(Request $request)
    {
        $api = \DB::table('setings')->where('id',1)->first();
        if($request->ktg_tipe !== 'joki'){
            $request->validate([
                'uid' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
        }else{
            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'jumlah_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
        }
        
          
            $creds = array(
                'secret' => $api->captcha_secret,
                'response' => $request->grecaptcha
            );
       
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($creds));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);
         
            $status = json_decode($response, true);
            
            if(!$status['success']){ 
                
                return response()->json([
                    'status' => false,
                ],422);
            
            }
            $smile = new SmileOneController();
            $apicheck = new ApiCheckController();
            
            if(Auth::check()){
                if(Auth::user()->role == "Member"){
                    $dataLayanan = Layanan::where('id', $request->service)->select('harga_member AS harga', 'kategori_id', 'harga_flash_salee','is_flash_sale', 'expired_flash_sale', 'harga_coret')->first();
                }else if(Auth::user()->role == "Platinum"){
                    $dataLayanan = Layanan::where('id', $request->service)->select('harga_platinum AS harga', 'kategori_id', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret')->first();
                }else if(Auth::user()->role == "Gold" || Auth::user()->role == "Admin"){
                    $dataLayanan = Layanan::where('id', $request->service)->select('harga_gold AS harga', 'kategori_id', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret')->first();
                }
            }else{
                $dataLayanan = Layanan::where('id', $request->service)->select('harga AS harga', 'kategori_id', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret')->first();
            }
            
            if($dataLayanan->is_flash_sale == 1 && $dataLayanan->expired_flash_sale >= date('Y-m-d')){
            
                $dataLayanan->harga = $dataLayanan->harga_flash_salee;
                
            }


            if(isset($request->voucher)){
                $voucher = Voucher::where('kode', $request->voucher)->first();
                
                if(!$voucher){
                    $dataLayanan->harga = $dataLayanan->harga;
                }else{
                    if($voucher->stock == 0){
                        $dataLayanan->harga = $dataLayanan->harga;
                    }else{
                        $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                        if($potongan > $voucher->max_potongan){
                            $potongan = $voucher->max_potongan;
                        }
                        
                        $dataLayanan->harga = $dataLayanan->harga - $potongan;
                    }
                }
                
            }
            if($request->ktg_tipe !== 'joki') {
                $dataLayanan->harga = 1 * $dataLayanan->harga;
            } else {
                $dataLayanan->harga = $request->jumlah_joki * $dataLayanan->harga;
            }

            $dataKategori = Kategori::where('id', $dataLayanan->kategori_id)->select('kode')->first();
            if($request->payment_method == 'SALDO') {
                $request->payment_method = 'SALDO';
            } else {
                $dataMethod = Method::where('code', $request->payment_method)->select('name')->first();
                $request->payment_method = $dataMethod->name;
            }
            $daftarGameValidasi = ['8-ball-pool', 'arena-of-valor', 'apex-legends', 'call-of-duty', 'dragon-city', 'free-fire', 'genshin-impact', 'higgs-domino', 'honkai-impact', 'lords-mobile', 'marvel-super-war', 'mobile-legends', 'mobile-legends-a','mobile-legends-b', 'mobile-legends-adventure', 'point-blank', 'ragnarok-m', 'tom-and-jerry', 'top-eleven', 'valorant' ];
    
            if(in_array($dataKategori->kode, $daftarGameValidasi)){
                if ($dataKategori->kode == '8-ball-pool') {
                    $data = $apicheck->check($request->uid, null, '8 Ball Pool');
                } else if($dataKategori->kode == "arena-of-valor"){
                    $data = $apicheck->check($request->uid, null, 'AOV');
                } else if($dataKategori->kode == 'apex-legends'){
                    $data = $apicheck->check($request->uid, null, 'Apex Legends');
                } else if($dataKategori->kode == 'call-of-duty'){
                    $data = $apicheck->check($request->uid, null, 'Call Of Duty');
                } else if($dataKategori->kode == 'dragon-city'){
                    $data = $apicheck->check($request->uid, null, 'Dragon City');
                } else if($dataKategori->kode == "dragon-raja"){
                    $data = $apicheck->check($request->uid, null, 'Dragon Raja');
                } else if($dataKategori->kode == "free-fire"){
                    $data = $apicheck->check($request->uid, null, 'Free Fire');
                } else if($dataKategori->kode == "genshin-impact"){
                    $data = $apicheck->check($request->uid, $request->zone, 'Genshin Impact');
                } else if($dataKategori->kode == "higgs-domino"){
                    $data = $apicheck->check($request->uid, null, 'Higgs Domino');
                } else if($dataKategori->kode == "honkai-impact"){
                    $data = $apicheck->check($request->uid, null, 'Honkai Impact');
                } else if($dataKategori->kode == "lords-mobile"){
                    $data = $apicheck->check($request->uid, null, 'Lords Mobile');
                } else if($dataKategori->kode == "marvel-super-war"){
                    $data = $apicheck->check($request->uid, null, 'Marvel Super War');
                } else if ($dataKategori->kode == 'mobile-legends-a') {
                    $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
                } else if ($dataKategori->kode == 'mobile-legends-b') {
                    $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
                } else if ($dataKategori->kode == 'mobile-legends') {
                     $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends');
                } else if ($dataKategori->kode == 'mobile-legends-adventure') {
                     $data = $apicheck->check($request->uid, $request->zone, 'Mobile Legends Adventure');
                } else if($dataKategori->kode == "point-blank"){
                    $data = $apicheck->check($request->uid, null, 'Point Blank');
                } else if($dataKategori->kode == "ragnarok-m"){
                    $data = $apicheck->check($request->uid, $request->zone, 'Ragnarok M');
                } else if($dataKategori->kode == "tom-and-jerry"){
                    $data = $apicheck->check($request->uid, null, 'Tom Jerry Chase');
                } else if($dataKategori->kode == "top-eleven"){
                    $data = $apicheck->check($request->uid, null, 'Top Eleven');
                } elseif($dataKategori->kode == "valorant"){
                    $data = $apicheck->check($request->uid, null, 'Valorant');
                }
                if($data['status']['code'] == 1){
                    return response()->json([
                        'status' => false,
                        'data' => isset($data['data']['msg']) ? $data['data']['msg'] : 'Username tidak ditemukan atau coba lagi nanti'
                    ]);
                }
                $username = $data['data']['userNameGame'];
    
             $sendData = "<div class='mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-emerald-700'>
                <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' aria-hidden='true' class='h-6 w-6 text-emerald-500'>
                <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5'></path>
                </svg>
                </div>
                
                <h3 class='text-lg font-bold leading-6 mt-4' id='headlessui-dialog-title-:r7:' data-headlessui-state='open'>Detail Pesanan</h3>
                <div class='my-3'><p class='text-sm '>Jika Data Pesanan Kamu Sudah Benar Klik <strong>Beli Sekarang</strong></p></div>
                <div class='flex items-center gap-2'>
                <div class='w-4 border-t-2' style='border-color: rgb(112, 127, 235);'></div><h4 class='shrink-0 pr-4 text-sm font-semibold'>Data Player</h4></div>
                <div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>User ID</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->uid $request->zone</h4></div>
                <div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Username</h4><h4 class='shrink-0 pr-4 text-sm font-bold nick' id='nick'>" . urldecode($username) . "</h4></div>
                <br>
                <div class='flex items-center gap-2'>
                <div class='w-4 border-t-2' style='border-color: rgb(112, 127, 235);'>
                </div><h4 class='shrink-0 pr-4 text-sm font-semibold '>Ringkasan Pembelian</h4></div>
                <div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Harga</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>Rp. " . number_format($dataLayanan->harga, 0, '.', ',') .
                "</h4></div>
                <div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Metode Pembayaran</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>" . strtoupper($request->payment_method) .
                "</h4></div>
                <div class='my-3'><p class='text-sm '>Catatan : Harga diatas belum termasuk biaya admin.</p></div>";

            return response()->json([
                'status' => true,
                'data' => $sendData
            ]);
        } else {
            if($request->ktg_tipe !== 'joki'){
                $sendData = "User Data : <span id='nick'>$request->uid $request->zone</span><br>
             Harga : Rp. " . number_format($dataLayanan->harga, 0, '.', ',') .
            "<br>Metode Pembayaran : " . strtoupper($request->payment_method) .
                    "<br><br>Catatan : Harga diatas belum termasuk biaya admin";
    
                return response()->json([
                    'status' => true,
                    'data' => $sendData
                ]);
            } else {
                $sendData = "<div class='mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-emerald-700'>
<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' aria-hidden='true' class='h-6 w-6 text-emerald-500'>
<path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5'></path>
</svg>
</div>
<h3 class='text-lg font-bold leading-6 mt-4' id='headlessui-dialog-title-:r7:' data-headlessui-state='open'>Detail Pesanan</h3>
<div class='my-3'><p class='text-sm '>Jika Data Pesanan Kamu Sudah Benar Klik <strong>Beli Sekarang</strong></p></div>
<div class='flex items-center gap-2'>
<div class='w-4 border-t-2' style='border-color: rgb(112, 127, 235);'></div><h4 class='shrink-0 pr-4 text-sm font-semibold'>Data Player</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Email :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->email_joki</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Password :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->password_joki</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Request Hero :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->request_joki</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Catatan Penjoki :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->catatan_joki</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Password :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'><span id='nick'>$request->nickname_joki</span></h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Login Via :</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>$request->loginvia_joki</h4></div>
<br>
<div class='flex items-center gap-2'><div class='w-4 border-t-2' style='border-color: rgb(112, 127, 235);'></div>
<h4 class='shrink-0 pr-4 text-sm font-semibold '>Ringkasan Pembelian</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Harga</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>Rp. " . number_format($dataLayanan->harga, 0, '.', ',')."</h4></div>
<div class='flex justify-between'><h4 class='shrink-0 pr-4 text-sm '>Metode Pembayaran</h4><h4 class='shrink-0 pr-4 text-sm font-bold'>" . strtoupper($request->payment_method) .
"</h4></div>
<div class='my-3'><p class='text-sm '>Catatan : Harga diatas belum termasuk biaya admin.</p></div>";

  return response()->json([
                    'status' => true,
                    'data' => $sendData
                ]);
            }
        }
    }
    public function store(Request $request)
    {
        if($request->ktg_tipe !== 'joki'){
            $request->validate([
                'uid' => 'required',
                'nickname' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
            ]);
        } else {
            $request->validate([
                'email_joki' => 'required',
                'password_joki' => 'required',
                'loginvia_joki' => 'required',
                'nickname_joki' => 'required',
                'request_joki' => 'required',
                'catatan_joki' => 'required',
                'jumlah_joki' => 'required',
                'service' => 'required|numeric',
                'payment_method' => 'required',
                'nomor' => 'required|numeric',
                
            ]);
        }

        if(Auth::check()){
            if(Auth::user()->role == "Member"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan','harga_member AS harga','kategori_id', 'provider_id', 'provider', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret', 'profit_member AS profit')->first();
            }else if(Auth::user()->role == "Platinum"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan','harga_platinum AS harga','kategori_id', 'provider_id', 'provider', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret', 'profit_platinum AS profit')->first();
            }else if(Auth::user()->role == "Gold" || Auth::user()->role == "Admin"){
                $dataLayanan = Layanan::where('id', $request->service)->select('layanan','harga_gold AS harga','kategori_id', 'provider_id', 'provider', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret', 'profit_gold AS profit')->first();
            }            
        }else{
            $dataLayanan = Layanan::where('id', $request->service)->select('layanan', 'harga AS harga', 'kategori_id', 'provider_id', 'provider', 'harga_flash_salee', 'is_flash_sale', 'expired_flash_sale', 'harga_coret', 'profit')->first();
        }
        
        if($dataLayanan->is_flash_sale == 1 && $dataLayanan->expired_flash_sale >= date('Y-m-d')){
            
                $dataLayanan->harga = $dataLayanan->harga_flash_salee;
                
        }

        if(isset($request->voucher)){
            $voucher = Voucher::where('kode', $request->voucher)->first();
            
            if(!$voucher){
                $dataLayanan->harga = $dataLayanan->harga;
            }else{
                if($voucher->stock == 0){
                    $dataLayanan->harga = $dataLayanan->harga;
                }else{
                    $potongan = $dataLayanan->harga * ($voucher->promo / 100);
                    if($potongan > $voucher->max_potongan){
                        $potongan = $voucher->max_potongan;
                    }
                    
                    $dataLayanan->harga = $dataLayanan->harga - $potongan;
                    $voucher->decrement('stock');
                }
            }
        }  

        $kategori = Kategori::where('id', $dataLayanan->kategori_id)->select('kode')->first();

        $unik = date('Hs');
        $kode_unik = substr(str_shuffle(1234567890),0,3);
        $order_id = 'INV'.$unik.$kode_unik.'NVD';
        $tripay = new TriPayController();  
      
        $api = \DB::table('setings')->where('id',1)->first();
        $rand = rand(1,1000);
        $no_pembayaran = '';
        $amount = '';
        $reference = '';
        if($request->ktg_tipe !== 'joki') {
            $dataLayanan->harga = 1 * $dataLayanan->harga;
        } else {
            $dataLayanan->harga = $request->jumlah_joki * $dataLayanan->harga;
        }
        
       if ($request->payment_method == "SALDO") {
            $amount = $dataLayanan->harga;
        } else if ($request->payment_method == "OVO" || $request->payment_method == "GOPAY" || $request->payment_method == "BCA"){

            $amount = $dataLayanan->harga + $rand;
            $reference = '';
            if ($request->payment_method == "OVO") {

                $no_pembayaran = $api->ovo_admin;

                if ($amount < 10000) {

                    return response()->json(['status' => false, 'data' => 'Minimum jumlah pembayaran untuk metode pembayaran ini adalah Rp 10.000']);
                }
            } else if ($request->payment_method == "GOPAY") {

                $no_pembayaran = $api->gopay_admin;

                if ($amount < 10000) {

                    return response()->json(['status' => false, 'data' => 'Minimum jumlah pembayaran untuk metode pembayaran ini adalah Rp 10.000']);
                }
            } else if ($request->payment_method == "BCA") {
                $no_pembayaran = $api->bca_admin;
                if ($amount < 10000) {

                    return response()->json(['status' => false, 'data' => 'Minimum jumlah pembayaran untuk metode pembayaran ini adalah Rp 10.000']);
                }
            }
        } else {
            $listchannel = [];

            foreach ($tripay->channel()->data as $channel) {

                array_push($listchannel, $channel->code);
            }

            unset($listchannel['OVO']);


            if (!in_array($request->payment_method, $listchannel)) {


                return response()->json([
                    'status'     => false,
                    'data'    => "Tipe pembayaran tidak sah"
                ]);
            }

            $tripayres = $tripay->request($order_id, $dataLayanan->harga, $request->payment_method, $order_id.'@email.com', $request->nomor);

            
            if($tripayres['success'] != true) return response()->json(['status' => false, 'data' => $tripayres['msg']]);
            
            $no_pembayaran = $tripayres['no_pembayaran'];
            $reference = $tripayres['reference'];
            $amount = $tripayres['amount'];

        }
        
        
        if ($request->payment_method == "SALDO") {
            $pesan = 
                    "Orderan kamu dengan invoice $order_id telah berhasil dibayar!\n\n" .
                    "*Informasi pembelian:*\n\n" .
                    "*Item:* $dataLayanan->layanan\n" .
                    "*User ID:* $request->uid $request->zone\n" .
                    "*Pembayaran:* $request->payment_method - Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "\n\n" .
                    "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                    //"_Jika belum diterima silahkan kontak Admin WhatsApp *".env("NOMOR_ADMIN")."* dengan mengirimkan *INVOICE* biar kami cek , Follow sosial media kami untuk info terbaru dan promo lainnya:_ ".env("APP_IG")." \n".
                    "_Terima Kasih ^^_";
            } else {
            if($request->ktg_tipe == 'joki'){
                $pesan = 
                "Hii..\n" .
                "Orderanmu dengan Invoice *$order_id* Status Menunggu Pembayaran!\n\n" .
                "*Informasi Pemesanan:*\n\n" .
                "*-Layanan*: $dataLayanan->layanan\n" .
                "*-Email*: $request->email_joki \n" .
                "*-Password*: $request->password_joki\n" .
                "*-Nickname*: $request->nickname_joki\n" .
                "*-Request Hero*: $request->request_joki\n" .
                "*-Catatan*: $request->catatan_joki\n" .
                "*-Jumlah*: $request->jumlah_joki\n" .
                "*-Login Via*: $request->loginvia_joki\n\n" .
                "*-Pembayaran*: $request->payment_method - Rp. " . number_format($amount, 0, '.', ',') . ",- \n\n" .
                "Kode Bayar / Nomor VA : *".$no_pembayaran."*\n\n" .
                 "_Terima kasih ^^_";
                 
                 
            } else {
                $pesan = 
                "Hii..\n" .
                "Orderanmu dengan Invoice *$order_id* Menunggu Pembayaran!\n\n" .
                "*-Layanan*: $dataLayanan->layanan\n" .
                "*-Data User*: $request->uid ($request->zone) *$request->nickname*\n" .
                "*-Pembayaran*: $request->payment_method - Rp. " . number_format($amount, 0, '.', ',') . ",- \n\n" .
                "*Harap Dibayar Sebelum 1x24 Jam!* Segera lakukan pembayaran sesuai dengan kode bayar / nomor VA yang tercantum. Pastikan nominal pembayaran juga sesuai dengan total bayar.\n\n" .
                "*Invoice* : " . env("APP_URL") . "/pembelian/invoice/$order_id\n\n" .
                "_Terima kasih ^^_";
            }
        }
        
        if ($request->payment_method != "SALDO") {
            $requestPesan = $this->msg($request->nomor, $pesan);
            if(Auth::check()){
                $username = Auth::user()->username;
            } else {
                $username = null;
            }
            $pembelian = new Pembelian();
            $pembelian->order_id = $order_id;
            $pembelian->username = $username;
            $pembelian->user_id = $request->ktg_tipe !== 'joki' ? $request->uid : $request->email_joki;
            $pembelian->zone = $request->ktg_tipe !== 'joki' ? $request->zone : $request->password_joki.' ['.$request->loginvia_joki.']';
            $pembelian->nickname = $request->ktg_tipe !== 'joki' ? $request->nickname : $request->nickname_joki;
            $pembelian->layanan = $request->ktg_tipe == 'joki' ? $kategori->nama.' '.$dataLayanan->layanan : $dataLayanan->layanan;
            $pembelian->harga = $amount;
            $pembelian->profit = $amount * ENV("MARGIN_PROFIT");
            $pembelian->keterangan = $request->ktg_tipe == 'joki' ? '['.$request->request_joki.'], '.$request->catatan_joki : '';
            $pembelian->status = $request->ktg_tipe !== 'joki' ? 'Pending' : '-';
            $pembelian->tipe_transaksi = $request->ktg_tipe !== 'joki' ? 'game' : 'joki';
            $pembelian->save();

            $pembayaran = new Pembayaran();
            $pembayaran->order_id = $order_id;
            $pembayaran->harga = $amount;
            $pembayaran->no_pembayaran = $no_pembayaran;
            $pembayaran->no_pembeli = $request->nomor;
            $pembayaran->status = 'Belum Lunas';
            $pembayaran->metode = $request->payment_method;
            $pembayaran->reference = $reference;
            $pembayaran->save();
            
            if($request->ktg_tipe == 'joki'){
                
                
                $jokian = \DB::table('data_joki')->insert([
                    'order_id' => $order_id,
                    'email_joki' => $request->email_joki,
                    'password_joki' => $request->password_joki,
                    'loginvia_joki' => $request->loginvia_joki,
                    'nickname_joki' => $request->nickname_joki,
                    'request_joki' => $request->request_joki,
                    'catatan_joki' => $request->catatan_joki,
                    'jumlah_joki' => $request->jumlah_joki,
                    'status_joki' => 'Proses',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                
            }
            
        }else if($request->payment_method == "SALDO"){
            $user = User::where('username', Auth::user()->username)->first();

            if ($dataLayanan->harga > $user->balance) return response()->json(['status' => false, 'data' => 'Saldo anda tidak cukup']);

                if($dataLayanan->provider == "digiflazz"){
                    $digi = new digiFlazzController;
                    $provider_order_id = rand(1, 100000);
                    $order = $digi->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);
        
                    if ($order['data']['status'] == "Pending" || $order['data']['status'] == "Success") {
                        $order['status'] = true;
                    } else {
                        $order['status'] = false;
                    }   
                }else if($dataLayanan->provider == "vip"){
                    $vip = new VipResellerController;
                    $order = $vip->order($request->uid, $request->zone, $dataLayanan->provider_id);
                    
                    if($order['result']){
                        $order['status'] = true;
                        $provider_order_id = $order['data']['trxid'];
                    }else{
                        $order['status'] = false;
                    }
                }else if($dataLayanan->provider == "alpharamz"){
                    $alpharamz = new AlpharamzController;
                    $order = $alpharamz->order($request->uid, $request->zone, $dataLayanan->provider_id, $request->nomor);
                    
                    if($order['status'] == true){
                        $order['status'] = true;
                        $provider_order_id = $order['data']['id'];
                    }else{
                        $order['status'] = false;
                        $msg = $order['msg'];
                    }
                }else if($dataLayanan->provider == "apigames"){
                    $provider_order_id = rand(1, 10000);
                    $apigames = new ApiGamesController;
                    $order = $apigames->order($request->uid, $request->zone, $dataLayanan->provider_id, $provider_order_id);
                
                    if ($order['data']['status'] == "Success") {
                        $order['transactionId'] = $provider_order_id;
                        $order['status'] = true;
                    } else {
                        $order['status'] = false;
                    }                    
                }else if($dataLayanan->provider == "joki"){
                    $provider_order_id = '';
                    $order['status'] = true;
                }
            
            if($order['status']){

                $pesan = 
                
                    "Orderan kamu dengan invoice $order_id telah berhasil dibayar!\n\n" .
                    "*Informasi pembelian:*\n\n" .
                    "*Item:* $dataLayanan->layanan\n" .
                    "*User ID:* $request->uid $request->zone\n" .
                    "*Pembayaran* : $request->payment_method - Rp. " . number_format($dataLayanan->harga, 0, '.', ',') . "\n\n" .
                    "_Jika belum diterima silahkan kontak Admin WhatsApp *".env("NOMOR_ADMIN")."* dengan mengirimkan *INVOICE* biar kami cek , Follow sosial media kami untuk info terbaru dan promo lainnya:_ ".env("APP_IG")." \n\n".
                    "_Terima Kasih ^^_";


                $requestPesan = $this->msg($request->nomor, $pesan);
                $requestPesanAdmin = $this->msg(ENV("NOMOR_ADMIN"), $pesan);

                $user->update([
                    'balance' => $user->balance - $dataLayanan->harga
                ]);

                $pembelian = new Pembelian();
                $pembelian->username = Auth::user()->username;
                $pembelian->order_id = $order_id;
                $pembelian->user_id = $request->ktg_tipe !== 'joki' ? $request->uid : $request->email_joki;
                $pembelian->zone = $request->ktg_tipe !== 'joki' ? $request->zone : $request->password_joki.' ['.$request->loginvia_joki.']';
                $pembelian->nickname = $request->ktg_tipe !== 'joki' ? $request->nickname : $request->nickname_joki;
                $pembelian->layanan = $request->ktg_tipe == 'joki' ? $kategori->nama.' '.$dataLayanan->layanan : $dataLayanan->layanan;
                $pembelian->harga = $dataLayanan->harga;
                $pembelian->profit = $dataLayanan->harga * ENV("MARGIN_PROFIT");
                $pembelian->keterangan = $request->ktg_tipe == 'joki' ? '['.$request->request_joki.'], '.$request->catatan_joki : '';
                $pembelian->status = $request->ktg_tipe !== 'joki' ? 'Success' : '-';
                $pembelian->provider_order_id = $provider_order_id ? $provider_order_id : "";
                $pembelian->log = $request->ktg_tipe !== 'joki' ? json_encode($order) : null;
                $pembelian->tipe_transaksi = $request->ktg_tipe !== 'joki' ? 'game' : 'joki';
                $pembelian->save();

                $pembayaran = new Pembayaran();
                $pembayaran->order_id = $order_id;
                $pembayaran->harga = $dataLayanan->harga;
                $pembayaran->no_pembayaran = "SALDO";
                $pembayaran->no_pembeli = $request->nomor;
                $pembayaran->status = 'Lunas';
                $pembayaran->metode = $request->payment_method;
                $pembayaran->reference = $reference;
                $pembayaran->save();
                
                if($request->ktg_tipe == 'joki'){
                
                
                    $jokian = \DB::table('data_joki')->insert([
                        'order_id' => $order_id,
                        'email_joki' => $request->email_joki,
                        'password_joki' => $request->password_joki,
                        'loginvia_joki' => $request->loginvia_joki,
                        'nickname_joki' => $request->nickname_joki,
                        'request_joki' => $request->request_joki,
                        'catatan_joki' => $request->catatan_joki,
                        'jumlah_joki' => $request->jumlah_joki,
                        'status_joki' => 'Proses',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                
                }
                
            }else{
                return response()->json([
                    'status' => false,
                    'data' => isset($msg) ? $msg : 'Server Error'
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'order_id' => $order_id
        ]);
    }

    
    
    public function msg($nomor, $msg)
    {
        $api = \DB::table('setings')->where('id',1)->first();
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.fonnte.com/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('target' => $nomor,'message' => $msg),
          CURLOPT_HTTPHEADER => array(
            'Authorization: '.$api->wa_key
          ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
     
}
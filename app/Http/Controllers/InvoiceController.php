<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Berita;
use Illuminate\Support\Carbon;
use App\Http\Controllers\TriPayController;
use App\Http\Controllers\TriPayCallbackController;

class InvoiceController extends Controller
{
    public function create($order)
    {
        $data = Pembelian::where('pembayarans.order_id', $order)->join('pembayarans', 'pembelians.order_id', 'pembayarans.order_id')
                ->select('pembayarans.status AS status_pembayaran', 'pembayarans.metode AS metode_pembayaran', 'pembayarans.no_pembayaran', 'pembayarans.reference','pembelians.order_id AS id_pembelian',
                        'user_id', 'zone', 'nickname', 'layanan', 'keterangan', 'tipe_transaksi', 'pembayarans.harga AS harga_pembayaran', 'pembelians.created_at AS created_at', 'pembelians.status AS status_pembelian', 'pembayarans.reference')
                ->first();
        
        $expired = Carbon::create($data->created_at)->addDay();
        

    return view('components.invoice', [
        'data' => $data, 'expired' => $expired,
        'data_joki' => \DB::table('data_joki')->where('order_id', $order)->first(),
        'logoheader' => Berita::where('tipe', 'logoheader')->latest()->first(),
        'logofooter' => Berita::where('tipe', 'logofooter')->latest()->first()
        ]);
    }
}

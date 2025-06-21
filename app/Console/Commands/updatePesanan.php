<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembelian;
use App\Models\Layanan;
Use App\Models\LayananPpob;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\AlpharamzController;
use App\Http\Controllers\JulyhyusController;
use App\Http\Controllers\iPaymuController;
use App\Http\Controllers\TriPayCallbackController;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class updatePesanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatePesanan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pesanan = Pembelian::Where('status', 'Process')
                             ->orWhere('status', 'Lunas')
                             ->get();
        
        $digiFlazz = new digiFlazzController;
        $vip = new VipResellerController;
        $apigames = new ApiGamesController;
        $alpharamz = new AlpharamzController;
        
            foreach($pesanan as $data)
            {
                $pesan = "Pembelian *$data->layanan* Telah Berhasil Dikirim, Silahkan Cek Akun Anda, Terima kasih Sudah Order\n\n".
                         "Jika Pesanan Anda Belum Masuk Harap Hubungi Admin\n".
                         "Whatsapp : ".ENV("NOMOR_ADMIN");
                         
                $pembayaran = Pembayaran::where('order_id', $data->order_id)->first();
    
                if ($data->tipe_transaksi == "game") {
                    $layanan = Layanan::where('layanan', $data->layanan)->first();
                } else if ($data->tipe_transaksi == "pulsa") {
                    $layanan = Layanan::where('layanan', $data->layanan)->first();
                }
                $layanan = Layanan::where('layanan', $data->layanan)->first();
                try{
                    $providerId = $layanan->provider_id;
                    $provider_order_id = $data->provider_order_id;
                    $uid = $data->user_id;
                    $zone = $data->zone;
                
                    $provider_order_id = $data->provider_order_id;
                    
                    if($layanan->provider == "digiflazz"){
                        $checking = $digiFlazz->status($provider_order_id, $providerId, $uid, $zone);
                        $note = $checking['data']['sn'];
                    }else if($layanan->provider == "apigames"){
                        $checking = $apigames->status($provider_order_id);
                        $note = $checking['data']['sn'];
                    }else if($layanan->provider == "vip"){
                        $checking = $vip->status($provider_order_id);
                        $checking['data']['status'] = $checking['data'][0]['status'];
                        $note = $checking['data'][0]['note'];
                    }else if($layanan->provider == "alpharamz"){
                        $checking = $alpharamz->status($provider_order_id);
                        $note = $checking['data']['keterangan'];
                    }
                    // dd($checking['data']);
                    $sn = '';
                    $status_pembelian = '';
                    $status_check = false;
                    if ($checking['data']['status'] == "Menunggu" || $checking['data']['status'] == "Success" || $checking['data']['status'] == "Lunas" || $checking['data']['status'] == "Sukses" 
                    || $checking['data']['status'] == "Pending" || $checking['data']['status'] == "Proses" || $checking['data']['status'] == "success") {
                        // dd($checking);
                        $status_check = true;
                        $status_pembelian = "Success";
                        $sn = $note;
                    }else if($checking['data']['status'] == "Batal" || $checking['data']['status'] == "Error" || $checking['data']['status'] == "error" || $checking['data']['status'] == "Gagal"){
                        $status_check = true;
                        $sn = "Gagal Diproses.";
                        $status_pembelian = "Batal";
                    }
    
    
                     if($status_check){
                    if($status_pembelian == "Process"){
                        if(date('Y-m-d',strtotime($data->created_at)) == date('Y-m-d')){
                            $requestPesan = $this->msg($pembayaran->no_pembeli,$pesan); 
                        }
                            Pembelian::where('provider_order_id', $provider_order_id)
                               ->update(['status' => $status_pembelian, 'keterangan' => $sn, 'log' => json_encode($checking)]);
                        }else{
                            Pembelian::where('provider_order_id', $provider_order_id)
                                ->update(['status' => $status_pembelian, 'keterangan' => $sn, 'log' => json_encode($checking)]);
                        }
                    }else{
                                        
                    }
                }catch (\Exception $e){
                    continue;
                    throw $e;
                }
            }
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

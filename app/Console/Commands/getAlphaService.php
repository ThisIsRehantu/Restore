<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\LayananPpob;
use App\Http\Controllers\AlpharamzController;
use Str;

class getAlphaService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getalpharamz';

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

        $alpharamz = new AlpharamzController;
        $res = $alpharamz->harga();
        
        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if(Str::upper($data['kategori']) == Str::upper($kategori->brand)){
                    //if($data['category'] == "Games"){
                        
                        $cekgame = Layanan::where('provider_id',$data['id'])->first();
                        
                        if(!$cekgame){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['nama_layanan'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->id = $data['code'];
                            $layanan->harga = $data['harga'];
                            $layanan->harga_member = $data['harga'];
                            $layanan->harga_platinum = $data['harga'];
                            $layanan->harga_gold = $data['harga'];
                            $layanan->profit = 6;
                            $layanan->profit_member = 6;
                            $layanan->profit_platinum = 2;
                            $layanan->profit_gold = 1;
                            $layanan->catatan = '';
                            $layanan->status = ($data['status'] === "aktif" ? "available" : "unavailable");
                            $layanan->provider = "alpharamz";
                            $layanan->save();
                        }else{

                          $cekgame->update([
                             
                             'harga' => $data['harga'] + ($data['harga'] * $cekgame->profit / 100),
                             'harga_member' => $data['harga'] + ($data['harga'] * $cekgame->profit_member / 100),
                             'harga_platinum' => $data['harga'] + ($data['harga'] * $cekgame->profit_platinum / 100),
                             'harga_gold' => $data['harga'] + ($data['harga'] * $cekgame->profit_gold / 100),
                             'status' => ($data['status'] === "available" ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        print '<font color="green"><pre>[+] <b>NVD STORE INDONESIA Area</b></pre></font>';
                        print '<font color="green"><pre>[+] Produk: '.$data['nama_layanan'].'</pre></font>';
                        print '<font color="green"><pre>[+] Description: '.$data['id'].'</pre></font>';
                        print '<font color="green"><pre>[+] Pricelist: '.$data['harga'].'</pre></font><hr>';
                   }
                }
            }
        
    }
}

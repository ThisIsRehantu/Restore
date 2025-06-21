<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Http\Controllers\VipResellerController;
use Str;

class getVipReseller extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getvip';

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

    $vipreseller = new VipResellerController;
        $res = $vipreseller->service();
        
        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if(Str::upper($data['game']) == Str::upper($kategori->brand)){
                    $api = \DB::table('setings')->where('id',1)->first();
                    //if($data['category'] == "Games"){
                        
                        $cekgame = Layanan::where('provider_id',$data['code'])->first();
                        
                        if(!$cekgame){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['code'];
                            $layanan->harga = $data['price']['basic'];
                            $layanan->harga_member = $data['price']['basic'];
                            $layanan->harga_platinum = $data['price']['basic'];
                            $layanan->harga_gold = $data['price']['basic'];
                            $layanan->profit = $api->profit_public;
                            $layanan->profit_member = $api->profit_member;
                            $layanan->profit_platinum = $api->profit_platinum;
                            $layanan->profit_gold = $api->profit_gold;
                            $layanan->product_logo = "";
                            $layanan->catatan = '';
                            $layanan->status = ($data['status'] === "available" ? "available" : "unavailable");
                            $layanan->provider = "vip";
                            $layanan->save();
                        }else{

                          $cekgame->update([
                             
                             'harga' => $data['price']['basic'] + ($data['price']['basic'] * $cekgame->profit / 100),
                             'harga_member' => $data['price']['basic'] + ($data['price']['basic'] * $cekgame->profit_member / 100),
                             'harga_platinum' => $data['price']['basic'] + ($data['price']['basic'] * $cekgame->profit_platinum / 100),
                             'harga_gold' => $data['price']['basic'] + ($data['price']['basic'] * $cekgame->profit_gold / 100),
                             'status' => ($data['status'] === "available" ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        print '<font color="green"><pre>[+] <b>NVD STORE INDONESIA Area</b></pre></font>';
                        print '<font color="green"><pre>[+] Produk: '.$data['name'].'</pre></font>';
                        print '<font color="green"><pre>[+] Description: '.$data['code'].'</pre></font>';
                        print '<font color="green"><pre>[+] Pricelist: '.$data['price']['basic'].'</pre></font><hr>';
                   }
                }
            }
        
    }
}

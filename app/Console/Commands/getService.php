<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Http\Controllers\digiFlazzController;
use Str;

class getService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Service';

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
        
        $digiFlazz = new digiFlazzController;
        $res = $digiFlazz->harga();
        
    
        foreach(Kategori::get() as $kategori){
            foreach($res['data'] as $data){
                if(Str::upper($data['brand']) == Str::upper($kategori->brand)){
                    $api = \DB::table('setings')->where('id',1)->first();
                    if($data['category'] == "Games"){
                        $data['product_name'] = Str::replaceArray('MOBILELEGEND - ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('MOBILE LEGENDS ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Free Fire ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Genshin Impact ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('PUBG MOBILE ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Pubg ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('AOV ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Valorant ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Sausage Man ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Marvel Super War ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Call of Duty Mobile ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Honkai Impact 3 ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Dragon Raja ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Tower of Fantasy ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Ludo Club ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Clash Royale ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Super Sus ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Clash of Clans ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Zepeto ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Fifa Mobile ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Garena Undawn ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('LifeAfter ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Honkai Star Rail ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Omega Legends ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Metal Slug Awakening ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Identity V ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('One Punch Man ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('League of Legends Wild Rift ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Lords Mobile ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Lita ',['',''],$data['product_name']);
                            $data['product_name'] = Str::replaceArray('Garena ',['',''],$data['product_name']);
                        $cekgame = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        if(!$cekgame){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'] ;
                            $layanan->harga_member = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = $api->profit_public;
                            $layanan->profit_member = $api->profit_member;
                            $layanan->profit_platinum = $api->profit_platinum;
                            $layanan->profit_gold = $api->profit_gold;
                            $layanan->product_logo = "";
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->save();
                            
                            
                        }else{
                            
                          $cekgame->update([
                             
                             'harga' => $data['price'] + ($data['price'] * $cekgame->profit / 100),
                             'harga_member' => $data['price'] + ($data['price'] * $cekgame->profit_member / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * $cekgame->profit_platinum / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * $cekgame->profit_gold / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        print '<font color="green"><pre>[+] <b>NVD STORE INDONESIA Area</b></pre></font>';
                        print '<font color="green"><pre>[+] Produk: '.$data['product_name'].'</pre></font>';
                        print '<font color="green"><pre>[+] Description: '.$data['desc'].'</pre></font>';
                        print '<font color="green"><pre>[+] Pricelist: '.$data['price'].'</pre></font><hr>';
                       
                    }else if($data['category'] == "Pulsa"){
                        
                        $cekpulsa = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        
                        if(!$cekpulsa){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'];
                            $layanan->harga_member = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = $api->profit_public;
                            $layanan->profit_member = $api->profit_member;
                            $layanan->profit_platinum = $api->profit_platinum;
                            $layanan->profit_gold = $api->profit_gold;
                            $layanan->product_logo = "";
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->save();
                            
                            
                        }else{
                            
                            $cekpulsa->update([
                             
                             'harga' => $data['price'] + ($data['price'] * $cekpulsa->profit / 100),
                             'harga_member' => $data['price'] + ($data['price'] * $cekpulsa->profit_member / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * $cekpulsa->profit_platinum / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * $cekpulsa->profit_gold / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        print '<font color="green"><pre>[+] <b>NVD STORE INDONESIA Area</b></pre></font>';
                        print '<font color="green"><pre>[+] Produk: '.$data['product_name'].'</pre></font>';
                        print '<font color="green"><pre>[+] Description: '.$data['desc'].'</pre></font>';
                        print '<font color="green"><pre>[+] Pricelist: '.$data['price'].'</pre></font><hr>';
                        
                    }else if($data['category'] == "E-Money"){
                        
                        $cekemoney = Layanan::where('provider_id',$data['buyer_sku_code'])->first();
                        
                        
                        if(!$cekemoney){
                            
                            $layanan = new Layanan();
                            $layanan->layanan = $data['product_name'];
                            $layanan->kategori_id = $kategori->id;
                            $layanan->provider_id = $data['buyer_sku_code'];
                            $layanan->harga = $data['price'];
                            $layanan->harga_member = $data['price'];
                            $layanan->harga_platinum = $data['price'];
                            $layanan->harga_gold = $data['price'];
                            $layanan->profit = $api->profit_public;
                            $layanan->profit_member = $api->profit_member;
                            $layanan->profit_platinum = $api->profit_platinum;
                            $layanan->profit_gold = $api->profit_gold;
                            $layanan->product_logo = "";
                            $layanan->catatan = $data['desc'];
                            $layanan->status = ($data['seller_product_status'] === true ? "available" : "unavailable");
                            $layanan->provider = "digiflazz";
                            $layanan->save();
                            
                            
                        }else{
                            
                            $cekemoney->update([
                             
                             'harga' => $data['price'] + ($data['price'] * $cekemoney->profit / 100),
                             'harga_member' => $data['price'] + ($data['price'] * $cekemoney->profit_member / 100),
                             'harga_platinum' => $data['price'] + ($data['price'] * $cekemoney->profit_platinum / 100),
                             'harga_gold' => $data['price'] + ($data['price'] * $cekemoney->profit_gold / 100),
                             'status' => ($data['seller_product_status'] === true ? "available" : "unavailable")
                              
                          ]);
                            
                        }
                        
                        print '<font color="green"><pre>[+] <b>NVD STORE INDONESIA Area</b></pre></font>';
                        print '<font color="green"><pre>[+] Produk: '.$data['product_name'].'</pre></font>';
                        print '<font color="green"><pre>[+] Description: '.$data['desc'].'</pre></font>';
                        print '<font color="green"><pre>[+] Pricelist: '.$data['price'].'</pre></font><hr>';
                    }
                }
            }
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seting;

class SetingController extends Controller
{
    public function create()
    {
        return view('components.admin.seting', ['data' => seting::orderBy('id', 'asc')->paginate(10)]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'web_title' => 'required',
            'web_keywords' => 'required',
            'web_description' => 'required',
            'wa_admin' => 'required',
            'ig_admin' => 'required',
            'tele_admin' => 'required',
            'line_admin' => 'required',
            'email_admin' => 'required',
            'tiktok_admin' => 'required',
            'yt_admin' => 'required',
            'digi_username' => 'required',
            'digi_apikey' => 'required',
            'captcha_secret' => 'required',
            'captcha_sitekey' => 'required',
            'web_logo' => 'required|file|mimes:jpg,png',
        ]);

        $file = $request->file('web_logo');
        $folder = 'assets/thumbnail';
        $file->move($folder, $file->getClientOriginalName());    
        
        $seting = new seting();
        $seting->web_title = $request->web_title;
        $seting->web_keywords = $request->web_keywords;
        $seting->web_description = $request->web_description;
        $seting->ig_admin = $request->ig_admin;
        $seting->wa_admin = $request->wa_admin;
        $seting->tele_admin = $request->tele_admin;
        $seting->line_admin = $request->line_admin;
        $seting->email_admin = $request->email_admin;
        $seting->tiktok_admin = $request->tiktok_admin;
        $seting->yt_admin = $request->yt_admin;
        $seting->digi_username = $request->digi_username;
        $seting->digi_apikey = $request->digi_apikey;
        $seting->tripay_marchant_code = $request->tripay_marchant_code;
        $seting->tripay_api = $request->tripay_api;
        $seting->tripay_private_key = $request->tripay_private_key;
        $seting->bangjeff_apikey = $request->bangjeff_apikey;
        $seting->captcha_secret = $request->captcha_secret;
        $seting->captcha_sitekey = $request->captcha_sitekey;
        $seting->web_logo = "/".$folder."/".$file->getClientOriginalName();
        $seting->save();

        return back()->with('success', 'Berhasil menambahkan');
    }

    public function delete($id)
    {
        try{
            $data = seting::where('id', $id)->select('web_logo')->first();
            unlink(public_path($data->web_logo));
            seting::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }catch(\Exception $e){
            seting::where('id', $id)->delete();
            return back()->with('success', 'Berhasil hapus!');
        }
    }

public function detail($id)
    {
        $data = seting::where('id', $id)->first();
        
        $send = "
                <form action='".route("seting.detail.update", [$id])."' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='_token' value='".csrf_token()."'>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Nama Web</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->web_title. "' name='web_title'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Keywords</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->web_keywords. "' name='web_keywords'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Description</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->web_description. "' name='web_description'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Mystic CekID API ID</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->mystic_id. "' name='mystic_id'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Mystic CekID API KEY</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->mystic_key. "' name='mystic_key'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>WhatsApp</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->wa_admin. "' name='wa_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Instagram</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->ig_admin. "' name='ig_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Telegram</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tele_admin. "' name='tele_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Line</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->line_admin. "' name='line_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Email Us</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->email_admin. "' name='email_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tiktok</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tiktok_admin. "' name='tiktok_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Youtube</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->yt_admin. "' name='yt_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tripay Marchant Code</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tripay_marchant_code. "' name='tripay_marchant_code'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tripay API</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tripay_api. "' name='tripay_api'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tripay Private Key</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tripay_private_key. "' name='tripay_private_key'>
                        </div>
                    </div>

                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tokopay Merchant ID</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tokopay_merchantid. "' name='tokopay_merchantid'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Tokopay Secret Key</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->tokopay_secretkey. "' name='tokopay_secretkey'>
                        </div>
                    </div>

                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Warna Web #1</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->warna_1. "' name='warna_1'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Warna Web #2</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->warna_2. "' name='warna_2'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Warna Web #3</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->warna_3. "' name='warna_3'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Warna Web #4</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->warna_4. "' name='warna_4'>
                        </div>
                    </div>

                    
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Digi Username</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->digi_username. "' name='digi_username'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Digi Api Key</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->digi_apikey. "' name='digi_apikey'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>VIP ID</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->vip_apiid. "' name='vip_apiid'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>VIP KEY</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->vip_apikey. "' name='vip_apikey'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>APIGAMES Secret</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->apigames_secret. "' name='apigames_secret'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>APIGAMES Merchant</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->apigames_merchant. "' name='apigames_merchant'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>BangJeff Key</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->bangjeff_apikey. "' name='bangjeff_apikey'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Captcha Secret</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->captcha_secret. "' name='captcha_secret'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Captcha Site Key</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->captcha_sitekey. "' name='captcha_sitekey'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>OVO Admin</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->ovo_admin. "' name='ovo_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>GoPay Admin</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->gopay_admin. "' name='gopay_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Shopee Admin</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->shopeepay_admin. "' name='shopeepay_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>BCA Admin</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->bca_admin. "' name='bca_admin'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Fonnte KEY</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->wa_key. "' name='wa_key'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Public</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->profit_public. "' name='profit_public'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Member</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->profit_member. "' name='profit_member'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Platinum</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->profit_platinum. "' name='profit_platinum'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Profit Gold</label>
                        <div class='col-lg-10'>
                            <input type='text' class='form-control' value='".$data->profit_gold. "' name='profit_gold'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Website Logo</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' name='web_logo' value='".$data->web_logo. "'>
                        </div>
                    </div>
                    <div class='mb-3 row'>
                        <label class='col-lg-2 col-form-label' for='example-fileinput'>Website Ico</label>
                        <div class='col-lg-10'>
                            <input type='file' class='form-control' name='fav_ico' value='".$data->fav_ico. "'>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                        <button type='submit' class='btn btn-primary'>Simpan</button>
                    </div>
                </form>
        ";

        return $send;        
    }  
    
    public function patch(Request $request, $id)
    {
        if($request->file('web_logo')){
            $file = $request->file('web_logo');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());      
            seting::where('id', $id)->update([
                'web_logo' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        if($request->file('fav_ico')){
            $file = $request->file('fav_ico');
            $folder = 'assets/thumbnail';
            $file->move($folder, $file->getClientOriginalName());      
            seting::where('id', $id)->update([
                'fav_ico' => "/".$folder."/".$file->getClientOriginalName()
            ]);
        }
        
        $method = seting::where('id', $id)->update([
            'web_title' => $request->web_title,
            'web_keywords' => $request->web_keywords,
            'web_description' => $request->web_description,
            'web_description' => $request->web_description,
            'wa_admin' => $request->wa_admin,
            'ig_admin' => $request->ig_admin,
            'tele_admin' => $request->tele_admin,
            'line_admin' => $request->line_admin,
            'email_admin' => $request->email_admin,
            'tiktok_admin' => $request->tiktok_admin,
            'yt_admin' => $request->yt_admin,
            'tripay_marchant_code' => $request->tripay_marchant_code,
            'tripay_api' => $request->tripay_api,
            'tripay_private_key' => $request->tripay_private_key,
            'digi_username' => $request->digi_username,
            'digi_apikey' => $request->digi_apikey,
            'vip_apikey' => $request->vip_apikey,
            'vip_apiid' => $request->vip_apiid,
            'bangjeff_apikey' => $request->bangjeff_apikey,
            'captcha_secret' => $request->captcha_secret,
            'captcha_sitekey' => $request->captcha_sitekey,
            'ovo_admin' => $request->ovo_admin,
            'gopay_admin' => $request->gopay_admin,
            'shopeepay_admin' => $request->shopeepay_admin,
            'bca_admin' => $request->bca_admin,
            'mystic_id' => $request->mystic_id,
            'mystic_key' => $request->mystic_key,
            'profit_public' => $request->profit_public,
            'profit_member' => $request->profit_member,
            'profit_platinum' => $request->profit_platinum,
            'profit_gold' => $request->profit_gold,
            'apigames_secret' => $request->apigames_secret,
            'apigames_merchant' => $request->apigames_merchant,
            'wa_key' => $request->wa_key
        ]);
           
        return back()->with('success', 'Berhasil update');        
    }        
}

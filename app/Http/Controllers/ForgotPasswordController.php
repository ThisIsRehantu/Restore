<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Http;
use Auth;

class ForgotPasswordController extends Controller
{
    
    public function forgotPassword()
    {
        return view('components.forgotpassword');
    }
    
    
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric'
        ],
        [
            'phone.required' => 'Harap isi no',
            'phone.numeric' => 'No tidak valid!'
        ]);
        
        $nomor = $request->phone;
        
    
        
        $cek = \App\Models\User::where('whatsapp',$nomor)->first();
        
        if(!$cek){
            
            return back()->with('error','No tidak ditemukan!');
            
        }
        
        $otp = rand(100000,999999);
        
        $cek->update(['otp' => $otp]);
        
        Session::put('no',$nomor);
        
        $data = [
            'api_key' => ENV('WA_KEY'),
            'sender'  => ENV('WA_NUMBER'),
            'number'  => $nomor,
            'message' => 'Masukan Kode Verifikasi (OTP) : '.$otp.''
        ];
        
        $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://waysender-v2.ridped.com/apiv2/send-message.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($data))
);

$response = curl_exec($curl);

curl_close($curl);
echo $response;
       
        
    
        
        
        return view('components.verifyotp');
        
        
        
        
    }
    
    
    public function verifyOtp(Request $request)
    {
        
        $nomor = Session::get('no');
        
        if(!$nomor){
            
            return redirect('/forgot-password');
            
        }
        
        $otp = '';
        
        foreach($request->otp as $kode){
            
            $otp .= $kode;
            
        }
        
        
        $cek = \App\Models\User::where('whatsapp',$nomor)->where('otp',$otp)->first();
        
        if(!$cek){
            
            return back()->with('error','Kode OTP tidak valid!');
            
        }
        
        $cek->update(['otp' => NULL]);
        
        
        Auth::login($cek);
        
        
        return redirect('/user/edit/profile');
        
        
        
        
        
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlpharamzController extends Controller
{
    public function order($uid = null, $zone = null, $service = null, $kontak = "628123456789")
    {
        if($zone == null) {
            $target = $uid;
        } else {
            $target = $uid.'|'.$zone;
        }
        $api_postdata = array(
            'api_key' => ENV("ALPHARAMZ_KEY"),
            'action' => 'order',
            'service_id' => $service,
            'target' => $target,
            'kontak' => $kontak
        );

        $header = array(
            'Content-Type: application/json',
        );

        return $this->connect("/order", $api_postdata, $header);
    }

    public function status($poid = null)
    {
        $data = array(
            'api_key' => ENV("ALPHARAMZ_KEY"),
            'action' => 'status',
            'order_id' => $poid
        );        

        return $this->connect("/status", $data);
    }

    public function harga()
    {
        $data = array(
            'api_key' => ENV("ALPHARAMZ_KEY")
        );

        return $this->connect('/service', $data);
    }

    public function connect($url, $data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://alpharamz.id/api'.$url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $data,
        ));
        $chresult = curl_exec($curl);
        curl_close($curl);
        $json_result = json_decode($chresult, true);
        return $json_result;        
    }
}

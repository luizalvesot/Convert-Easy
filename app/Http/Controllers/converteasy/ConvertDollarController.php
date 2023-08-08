<?php

namespace App\Http\Controllers\converteasy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConvertDollarController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDollarAPI()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://economia.awesomeapi.com.br/last/USD-BRL',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $obj = json_decode($response);
        $valorDolar = $obj->USDBRL->ask;
        $valorDolarFormated = substr($valorDolar, 0, 0);

        return view('converteasy.index', compact('valorDolarFormated'));
    }
}

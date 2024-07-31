<?php

namespace App\Modules\Moedas;


class Moeda extends Auth
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Funcao responsavel por buscar o objeto com as variaveis da moeda
     * 
     */
    public function request($path)
    {
        $moeda = str_replace("-", "", $path);

        $curl = curl_init();
        
        $full_url = "https://$this->domain/last/$path";

		curl_setopt_array($curl, array(
		   CURLOPT_URL => $full_url,
		   CURLOPT_RETURNTRANSFER => true,
		   CURLOPT_ENCODING => "",
		   CURLOPT_MAXREDIRS => 10,
		   CURLOPT_TIMEOUT => 0,
		   CURLOPT_FOLLOWLOCATION => true,
		   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		   CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);

		curl_close($curl);

        $object = json_decode($response);

        return substr($object->$moeda->ask, 0, -2);
    }
}

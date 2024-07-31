<?php

namespace App\Http\Controllers\converteasy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Moedas\Moeda;

class ConvertController extends Controller
{
    public function getMoedaAPI()
	{
        return view('converteasy.index');
	}
}

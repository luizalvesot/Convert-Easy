<?php

namespace App\Http\Livewire\Converteasy;

use Livewire\Component;
use App\Modules\Moedas\Moeda as Moedas;

class Moeda extends Component
{
    public $moeda_view = 'USD-BRL';
    public $vlr_moeda = 1.00;

    public function render()
    {
        $vlr_real = (new Moedas)->request($this->moeda_view);

        if($this->vlr_moeda != '')
        {   
            $vlr = $this->vlr_moeda * $vlr_real;
            $result = number_format($vlr, 2, ',', '.');
            return view('livewire.converteasy.moeda', compact('result'));
        } else {
            return view('livewire.converteasy.moeda');
        }
    }
}

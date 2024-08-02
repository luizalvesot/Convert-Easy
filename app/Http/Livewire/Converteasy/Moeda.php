<?php

namespace App\Http\Livewire\Converteasy;

use Livewire\Component;
use App\Modules\Moedas\Moeda as Moedas;

class Moeda extends Component
{
    public $moedaLocal = 'USD-BRL';
    public $valorDigitado;
    public $precoAPI;
    public $estiloCalculo = "valueEsquerdo";

    public function mount()
    {
        $this->precoAPI = (new Moedas)->request($this->moedaLocal);
        $this->valorDigitado = 1.00;
    }

    public function calcular()
    {

    }

    public function render()
    { 
        $estilo = "";

        if($this->estiloCalculo = "valueEsquerdo")
        {
            $estilo = "valueEsquerdo";
        } else {
            $estilo = "valueDireito";
        }
        //dd($estilo);

        return view('livewire.converteasy.moeda', compact('estilo'));
    }
}

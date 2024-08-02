<?php

namespace App\Http\Livewire\Converteasy;

use Livewire\Component;
use App\Modules\Moedas\Moeda as Moedas;

class Moeda extends Component
{
    public $moedaLocal = 'USD-BRL';
    public $precoAPI;
    public $valorDigitado;
    public $estiloDeCalculo;

    public function mount()
    {
        $this->precoAPI = (new Moedas)->request($this->moedaLocal);
        $this->valorDigitado = 1.00;
        $this->estiloDeCalculo = 1;
    }

    public function render()
    {   
        $estilo = $this->estiloDeCalculo;
        if($this->valorDigitado != '')
        {
            $valorCalculado = $this->precoAPI * $this->valorDigitado;

            return view('livewire.converteasy.moeda', compact('estilo', 'valorCalculado'));
        } else{
            $valorCalculado = 0.00;
            return view('livewire.converteasy.moeda', compact('estilo', 'valorCalculado'));
        }
    }
}

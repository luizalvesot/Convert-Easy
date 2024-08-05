<?php

namespace App\Http\Livewire\Converteasy;

use Livewire\Component;
use App\Modules\Moedas\Moeda as Moedas;

class Moeda extends Component
{
    public $moedaLocal = 'USD-BRL';
    public $valorDigitado;
    public $valorDigitado2;
    public $estiloDeCalculo; 

    public function mount()
    {
        $this->estiloDeCalculo = "true"; 
        $this->valorDigitado = 1.00;
        $this->valorDigitado2 = floatval((new Moedas)->request($this->moedaLocal));
    }

    public function render()
    {   
        $estilo = $this->estiloDeCalculo;
        $valorCalculado = 0.00;
        $valorCalculado2 = floatval(0);

        if(!empty($this->valorDigitado))
        {
            if($estilo == "true")
            {   
                $valorAPI = (new Moedas)->request($this->moedaLocal);
                $valorCalculado = $valorAPI * $this->valorDigitado;
            } else {
                //dd($estilo);
                $valorAPI = floatval((new Moedas)->request($this->moedaLocal));
                $valorCalculado2 = ($this->valorDigitado2) / ($valorAPI);
                //dd($valorCalculado2);
            }
            return view('livewire.converteasy.moeda', compact('estilo', 'valorCalculado', 'valorCalculado2'));
        } else{
            $valorCalculado = 0.00;
            $valorCalculado2 = 0.00;
            return view('livewire.converteasy.moeda', compact('estilo', 'valorCalculado', 'valorCalculado2'));
        }
        
    }
}

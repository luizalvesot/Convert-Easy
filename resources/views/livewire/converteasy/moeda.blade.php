<div>
    <div class="row justify-content-center rounded mb-5" style="background-color:#DCDCDC;">
        <form class="col-md shadow-sm p-4"> 
            <!-- Linha da imagem da moeda -->
            <div class="row justify-content-center">
                <div class="p-2 m-2 shadow-lg circle-init" style="background-image:url('https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/05/bandeira-estados-unidos.jpg'); background-size: 100% 100%;"></div>
            </div>
            <!-- Linha do nome da moeda -->
            <div class="row justify-content-center">
                <h4 class="mb-4 text-dark">DÓLAR AMERICANO</h4>
            </div>
            <!-- Linha do select de tipo de conta -->
             <div class="row justify-content-center">
                <select class="form-select px-4 py-1 border-0" wire:model="estiloDeCalculo">
                    <option value="true">Calcular dólar para real</option>
                    <option value="false">Calcular real para dólar</option>
                </select>
             </div>
            <!-- Linha dos valores da moeda -->
            <div class="row m-3 justify-content-center">
                <div class="m-2 col-sm">
                    <!-- campo da esquerda -->
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">US$</span>
                        @if($estilo == "true")
                            @if($valorDigitado != '')
                                <input class="cot-moeda" wire:model="valorDigitado" type="text" style="background-color: rgb(241, 250, 241);"
                                    value="{{ number_format($valorDigitado, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                            @else
                                <input class="cot-moeda" wire:model="valorDigitado" type="text" style="background-color: rgb(241, 250, 241);"
                                    value="" onClick="this.setSelectionRange(0, this.value.length)">
                            @endif
                        @else
                            <input class="cot-moeda" type="text" disabled value="{{ number_format($valorCalculado2, 2, ',', '.') }}" 
                                onClick="this.setSelectionRange(0, this.value.length)">
                        @endif
                    </span>
                </div>
                <!-- Coluna que mostra vale hoje -->
                <div class="m-2 mt-4">
                    <span class="text-success font-weight-bold">
                        <b>VALE</b> agora
                    </span>
                </div>
                <div class="m-2 col-sm">
                    <!-- campo da direita -->
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">R$</span>
                        @if($estilo != "true")
                            @if($valorDigitado2 != '')
                                <input class="cot-moeda" type="text" wire:model="valorDigitado2" style="background-color: rgb(241, 250, 241);"
                                    value="{{ number_format($valorDigitado2, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                            @else
                                <input class="cot-moeda" wire:model="valorDigitado2" type="text" style="background-color: rgb(241, 250, 241);"
                                    value="" onClick="this.setSelectionRange(0, this.value.length)">
                            @endif
                        @else
                            <input class="cot-moeda" type="text" disabled value="{{ number_format($valorCalculado, 2, ',', '.') }}" 
                                onClick="this.setSelectionRange(0, this.value.length)">
                        @endif
                    </span>
                </div>
            </div>
            <!-- linha que mostra o alert para selecionar outras moedas -->
            <div class="row m-4 justify-content-center">
                <div class="alert alert-light w-100 my-2" role="alert">
                    <a href="#" class="alert-link">Clique aqui</a> para escolher cotações de outra moeda.
                </div>
            </div>
        </form>  
    </div>
</div>

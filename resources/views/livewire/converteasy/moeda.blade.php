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
                <select class="form-select px-4 py-1 border-0 rounded" wire:model="estiloCalculo">
                    <option value="valueEsquerdo">Calcular dólar para real</option>
                    <option value="valueDireito">Calcular real para dólar</option>
                </select>
             </div>
            <!-- Linha dos valores da moeda -->
            <div class="row m-3 justify-content-center">
                <div class="m-2 col-sm">
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">US$</span>
                        @if($estilo == "valueEsquerdo")
                            <input class="cot-moeda w-90 bg-light" wire:model.live="valorDigitado" type="text"
                                value="{{ number_format($valorDigitado, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                        @else
                            <input class="cot-moeda w-90" disabled wire:model.live="valorDigitado" type="text"
                                value="{{ number_format($valorDigitado, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                        @endif
                    </span>
                </div>
                <div class="m-2 mt-4">
                    <span class="text-success font-weight-bold">
                        <b>VALE</b> agora
                    </span>
                </div>
                <div class="m-2 col-sm">
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">R$</span>
                        @if($estilo == "valueDireito")
                            <input class="cot-moeda w-90 bg-light" type="text" 
                                    value="{{ number_format($precoAPI, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                        @else
                            <input class="cot-moeda w-90" type="text" disabled
                                value="{{ number_format($precoAPI, 2, ',', '.') }}" onClick="this.setSelectionRange(0, this.value.length)">
                        @endif
                    </span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div wire:loading class="bg-success p-2">
                    <strong>Calculando </strong>
                    <div class="spinner-border spinner-border-sm mx-2 ms-auto" role="status"></div>
                </div>
            </div>
            <div class="row m-4 justify-content-center">
                <div class="alert alert-dark w-100 my-2" role="alert">
                    <a href="#" class="alert-link">Clique aqui</a> para escolher cotações de outra moeda.
                </div>
            </div>
        </form>  
    </div>
</div>

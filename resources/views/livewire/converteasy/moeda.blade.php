<div>
    <div class="row justify-content-center rounded mb-5">
        <form class="col-md shadow-sm p-4"> 
            <!-- Linha da imagem da moeda -->
            <div class="row justify-content-center">
                <div class="p-2 m-2 shadow-lg circle-init" style="background-image:url('https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/05/bandeira-estados-unidos.jpg'); background-size: 100% 100%;"></div>
            </div>
            <!-- Linha do nome da moeda -->
            <div class="row justify-content-center">
                <h4 class="mb-4 text-dark">DÓLAR AMERICANO</h4>
            </div>
            <!-- Linha dos valores da moeda -->
            <div class="row m-3 justify-content-center">
                <div class="m-2 col-sm">
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">US$</span>
                        <input class="cot-moeda w-90" wire:model.live.1ms="vlr_moeda" type="text" onClick="this.setSelectionRange(0, this.value.length)">
                    </span>
                </div>
                <div class="m-2 mt-4">
                    <span class="text-success font-weight-bold">
                        <b>VALE</b> hoje
                    </span>
                </div>
                <div class="m-2 col-sm">
                    <span class="row p-2 cot-moeda-group shadow">
                        <span class="cot-symbol">R$</span>
                        <input class="cot-moeda w-90" type="text" value="@if(isset($result)){{$result}}@endif" onClick="this.setSelectionRange(0, this.value.length)">
                    </span>
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

@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-9">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h6 class="mt-0 text-dark">Selecione uma das moedas abaixo:</h6> 
                    
                        <div class="text-dark list-group pt-2 pb-2">
                            <a class="list-group-item list-group-item-action disabled">Dólar Americano <b>US$</b></a>
                            <a href="{{ route('euro') }}" class="list-group-item list-group-item-action text-dark">Euro <b>€</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Libra Esterlina <b>£</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Franco Suiço <b>SFr</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Peso Argentino <b>$</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Dólar Canadense <b>C$</b></a>
                        </div>
                    
                </div>

                <div class="col-md-9 shadow-sm bg-white p-4">
                    <div class="row justify-content-center">
                        <div class="p-2 m-2 shadow-lg circle-init" style="background-image:url('https://www.infomoney.com.br/wp-content/uploads/2019/06/eua.jpg?resize=900%2C515&quality=50&strip=all'); background-size: 100% 100%;"></div>
                    </div>
                    <div class="row justify-content-center">
                        <h4 class="mb-4 text-dark">DÓLAR AMERICANO</h4>
                    </div>
                    
                    <?php $value = 1; ?>

                    <div class="container">
                        <div class="row mt-2 justify-content-center">
                            <div class="m-2 col-sm" role="alert">
                                <span class="row p-2 cot-moeda-group shadow">
                                    <span class="cot-symbol">US$</span>
                                    <input class="cot-moeda" onClick="this.setSelectionRange(0, this.value.length)" 
                                           type="text" value="1,00">
                                </span>
                            </div>
                            <div class="mt-5 m-2">
                                <span class="text-success font-weight-bold">
                                    VALE
                                </span>
                            </div>
                            <div class="m-2 col-sm" role="alert">
                                <span class="row p-2 cot-moeda-group shadow">
                                    <span class="cot-symbol">R$</span>
                                    <input class="cot-moeda" onClick="this.setSelectionRange(0, this.value.length)" 
                                           type="text" value="{{ $valorDolarFormated * 1 }}">
                                </span>
                            </div>
                            <div class="mt-5 m-2">
                                <span class="text-success font-weight-bold">
                                    HOJE
                                </span>
                            </div>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show mt-4 m-2" role="alert">
                            Clique em cima do valor para alterá-lo, se necessário!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>  

            </div>
        </div>
      
        <!--Coluna reservada apenas para Google Adscence-->
        <div class="col-md-2 m-2">
            <div class="card border-0 shadow-sm">    
                <div class="card-body" style="background-color: rgba(102, 115, 96, 0.164);">
                    <div class="row justify-content-center">
                        <h6 class="m-2 text-dark">Reservado para anúncios</h6>
                        <div class="card border-0 m-2 p-1">
                            <div class="card-body">
                                <span>GOOGLE ADSCENCE</span>
                            </div>
                        </div>     
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

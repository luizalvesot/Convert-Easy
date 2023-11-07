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

        <div class="container">
            <div class="align-items-center">
                <div class="row mt-5 pt-2 mb-1">
                    <h3 class="text-dark font-titles">Dólar turismo nas principais cidades do Brasil</h3>
                </div>

                <table class="table table-bordered table-hover table-sm table-striped mt-4 mb-4">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cidade</th>
                            <th scope="col">Real (Equivale a 1 Dolar)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>São Paulo</th>
                            <td>R$ 4,99</td>
                        </tr>
                        <tr>
                            <th>Belo Horizonte</th>
                            <td>R$ 4,99</td>
                        </tr>
                        <tr>
                            <th>Rio de Janeiro</th>
                            <td>R$ 4,99</td>
                        </tr>
                        <tr>
                            <th>Brasilia</th>
                            <td>R$ 4,99</td>
                        </tr>
                        <tr>
                            <th>Fortaleza</th>
                            <td>R$ 4,99</td>
                        </tr>
                        <tr>
                            <th>Curitiba</th>
                            <td>R$ 4,99</td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4 mb-4">
                    <h3 class="text-dark font-titles">O que é dólar comercial?</h3>
                    <p class="lead">
                        Dólar turismo é a cotação do dólar utilizada como referência para pessoas físicas que querem comprar 
                        dólares para viajar e consumir em outros países.

                        Em outras palavras, dólar turismo é o valor da moeda física, negociada em casas de câmbio e utilizada 
                        na compra de bens e serviços no cotidiano.

                        Assim, quando vamos a uma casa de câmbio para trocar dinheiro antes de viajar para o exterior, 
                        o valor de venda ao qual devemos nos atentar é o do dólar turismo, e não o comercial.

                        Como veremos a seguir, o dólar turismo é diferente do dólar comercial, que em geral é mais barato, 
                        mas não serve para o uso da população em geral.   
                    </p>
                </div>
            </div>
        </div>

        <!--Restante da página apenas para conteúdo e informações-->
    </div>
</div>

@endsection

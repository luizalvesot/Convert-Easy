@extends('layouts.app')
@section('content')

<div class="container">
    
    <livewire:converteasy.moeda/>
    
    <!--Linha reservada apenas para Google Adscence-->
    <div class="row">
        <div class="col-md mt-5 mb-2 bg-white">
            <div class="row justify-content-center mx-2 p-2 bg-white">
                <span>GOOGLE ADSCENCE</span>    
            </div>                  
        </div>
    </div>

    <!--Restante da página apenas para conteúdo e informações-->
    <div class="align-items-center">
        <div class="row mt-3 pt-2 mb-1">
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

@endsection

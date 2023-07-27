@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-9">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h6 class="mt-0 text-dark">Selecione uma das moedas abaixo:</h6> 
                    
                        <div class="text-dark list-group pt-2 pb-2">
                            <a href="{{ route('index') }}" class="list-group-item list-group-item-action text-dark">Dólar Americano <b>US$</b></a>
                            <a class="list-group-item list-group-item-action disabled bg-dark text-white">Euro <b>€</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Libra Esterlina <b>£</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Franco Suiço <b>SFr</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Peso Argentino <b>$</b></a>
                            <a href="#" class="list-group-item list-group-item-action text-dark">Dólar Canadense <b>C$</b></a>
                        </div>
                    
                </div>

                <div class="col-md-9 shadow-sm bg-white p-4">
                    <div class="row justify-content-center">
                        <div class="p-2 m-2 shadow-lg" style="border-radius: 50%; width: 100px; height: 100px; background-image:url('https://static.vecteezy.com/ti/vetor-gratis/p1/2454893-bandeira-da-uniao-europeia-gratis-vetor.jpg'); background-size: 100% 100%;">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <h4 class="mb-4 text-dark">EURO</h4>
                    </div>
                    

                    <?php $value = 1; ?>

                    <div class="row justify-content-center mt-2">
                        <div class="col-4 m-2 text-center" role="alert">
                            <form action="">
                                <input class="form-control shadow-lg form-control-lg text-warning border-0" style="font-family: Tahoma; font-size: 210%" type="text" value="€ <?php echo $value; ?> dólar">
                            </form>
                        </div>

                        <div class="pt-2 mt-5">
                            <h5 class="text-success">vale</h5>
                        </div>
                        <div class="col-4 m-2 text-center">
                            <form action="">
                                <input class="form-control shadow-lg form-control-lg text-success border-0" style="font-family: Tahoma; font-size: 210%" type="text" value="R$ {{ $valorEuroFormated * $value }} reais">
                            </form>
                        </div>
                        <div class="pt-2 mt-5">
                            <h5 class="text-success">hoje</h5>
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

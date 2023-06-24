@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="card m-2">
        <div class="card-header">{{ __('Moedas mais usadas mundialmente') }}</div>    
            <div class="card-body">
                <div class="row justify-content-center">
            </div>                  
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card m-3 shadow-lg border-0">  
                    <div class="card-body">
                    
                        <div class="row justify-content-center">
                            <h4 class="mb-4 text-dark">DÓLAR HOJE</h4>
                        </div>
                        <?php $value = 1; ?>
                        <div class="row justify-content-center">
                            <div class="alert alert-primary col-4 m-2 text-center shadow-lg" role="alert">
                                <h4>Dólar Americano</h4>
                                <h1>US$ <?php echo $value; ?></h1>
                            </div>
                            <div class="pt-4 m-4">
                                <h3><i class="bi bi-arrow-right-square-fill"></i></h3>
                            </div>
                            <div class="alert alert-success col-4 m-2 text-center shadow-lg" role="alert">
                                <h4>Real Brasileiro</h4>
                                <h1>R$ {{ $valorDolarFormated * $value }}</h1>
                            </div>
                        </div>  

                        <div class="row justify-content-center">
                            <div class="alert alert-warning col-4 m-2 text-center shadow-lg" role="alert">
                                <h4>Euro</h4>
                                <h1>€ 1.00</h1>
                            </div>
                            <div class="pt-4 m-4">
                                <h3><i class="bi bi-arrow-right-square-fill"></i></h3>
                            </div>
                            <div class="alert alert-success col-4 m-2 text-center shadow-lg" role="alert">
                                <h4>Real Brasileiro</h4>
                                <h1>R$ {{ $valorEuroFormated }}</h1>
                            </div>
                        </div>    
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

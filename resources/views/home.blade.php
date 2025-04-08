@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand"></a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>

          
        <div class="col-md-8">                        
                       
            <div class="card shadow-sm" >

                <div class="card-header">{{ __('general.current weather', ['city' => 'Cali']) }}</div>
                    
                <div class="card-body">                    
                    <p class="card-text">                                                        
                            
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card "> 
                                    <div class="row g-0 ">

                                        <div class="col-md-4">
                                            <img src="{{ $icon }}" class="img-fluid rounded-start">
                                        </div>  
                                        <div class="col-md-8">                 
                                            <div class="card-body ">          
                                                <div class="temperature">{{ $temperaturec }}°<small>C</small></div>
                                                <div class="real-feel">{{ $condition }}</div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Viento</span> <span class="float-end">{{ $wind_kph }} km/h</span></li>
                                                <li class="list-group-item">Humedad</span> <span class="float-end">{{ $humidity }}</span></li>
                                                <li class="list-group-item">Hora Local</span> <span class="float-end">{{ $localtime }}</span></li>
                                            </ul>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </p>                      
                </div>
                    
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated {{ $last_updated }}</small>
                </div>                
              
            </div>
        </div>
    </div>
</div>

<style>
    .weather-icon {
        justify-content: center;
    }
    .temperature {
        font-size: 3rem;
        font-weight: bold;
    }
    
    .temperature small{
        font-size: 1.5rem;
        color: grey;
    }
    .real-feel {
        font-size: 0.9rem;
        color: #6c757d;
    }
    .details-label {
        font-weight: bold;
    }
</style>
@endsection



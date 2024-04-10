@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1>Treni</h1>
        <p>In partenza oggi</p>

        <div class="trains d-flex flex-wrap gap-3">

            @foreach($trains as $train)
            @if($train->data_partenza == $dateNow)
            <div class="card" style="width: 15rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{$train->azienda}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item date">{{$train->data_partenza}}</li>
                    <li class="list-group-item stations">
                        <span>Partenza: </span>{{$train->s_partenza}} <br>
                        <span>Arrivo: </span>{{$train->s_arrivo}}
                    </li>
                    <li class="list-group-item hours">
                        <span>Partenza: </span>{{date($train->orario_partenza)}} <br>
                        <span>Arrivo: </span>{{$train->orario_arrivo}}
                    </li>
                    <li class="list-group-item train-code"><span>Codice treno: </span>'{{$train->codice_treno}}'</li>
                    <li class="list-group-item train-carriages"><span>Carrozze: </span>{{$train->n_carrozze}}</li>

                    @if($train->cancellato)
                        <li class="list-group-item train-cancelled"><span>Stato: </span><div class="circle red"></div></li>
                    @else
                        <li class="list-group-item train-cancelled"><span>Stato: </span><div class="circle green"></div></li>
                    @endif

                    @if(!$train->cancellato)
                        <li class="list-group-item train-deelay"><span>Ritardo: </span>{{$train->in_orario? 'in orario' : 'in ritardo'}}</li>
                    @endif
                </ul>
                <div class="card-body">
                    @if($train->cancellato) 
                    <button type="button" class="btn btn-secondary" disabled>Acquista</button>
                    @else
                    <a href="#" class="card-link"><button type="button" class="btn btn-outline-success">Acquista</button></a>
                    @endif
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>

@endsection
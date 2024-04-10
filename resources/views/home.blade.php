@extends('layouts/app')

@section('content')

    <div class="container py-5">
        <h1>Treni</h1>

        <div class="trains d-flex flex-wrap gap-3">

            @foreach($trains as $train)
            <div class="card" style="width: 15rem;">
                {{-- <img src="..." class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{$train->azienda}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$train->s_partenza}} - {{$train->s_arrivo}}</li>
                    <li class="list-group-item">{{$train->orario_partenza}} - {{$train->orario_arrivo}}</li>
                    <li class="list-group-item">A third item</li>
                    <li class="list-group-item">{{$train->codice_treno}}</li>
                    <li class="list-group-item">{{$train->n_carrozze}}</li>
                    <li class="list-group-item">{{$train->cancellato? 'cancellato' : 'attivo'}}</li>
                    @if(!$train->cancellato)
                        <li class="list-group-item">{{$train->in_orario? 'in orario' : 'in ritardo'}}</li>
                    @endif
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Acquista</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection
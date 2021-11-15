@extends('layouts.main')

@section('title', 'HD Events - Principal')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busca de Eventos</h1>
        <form action="/" method="GET">
            <div class="mb-3">
                <input type="text" class="form-control" id="search" name="search" placeholder="Digite sua pesquisa" />
            </div>
        </form>
    </div>
    <div id="events-container" class="col-md-12">

        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle text-mutted">Veja os eventos dos próximos dias ...</p>
        @endif


        <div id="card-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" />
                    <div class="card-body">
                        <p class="card-date"></p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p id="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <p class="card-participants">X participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($events) === 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </div>



@endsection

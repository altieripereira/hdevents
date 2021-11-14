@extends('layouts.main')

@section('title', 'HD Events - Principal')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busca de Eventos</h1>
        <form action="">
            <div class="mb-3">
                <input type="text" class="form-control" id="search" placeholder="Digite sua pesquisa">
            </div>
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <div id="card-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="https://static.imasters.com.br/wp-content/uploads/2018/03/php-experience-og-image.jpg"
                        alt="{{ $event->title }}" />
                    <div class="card-body">
                        <p class="card-date"></p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X participantes</p>
                        <a href="#" class="btn btn-primary">Saiba Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection

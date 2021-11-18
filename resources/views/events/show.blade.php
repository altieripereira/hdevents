@extends('layouts.main')

@section('title', 'HD Events - ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" alt="" class="img-fluid" />
            </div>
            <div id="info-container" class="col-md-6">
                <h2>{{ $event->title }}</h2>
                <p id="event-city">
                    <ion-icon name="location-outline"></ion-icon> {{ $event->city }}
                </p>
                <p id="card-date">
                    <ion-icon name="time-outline"></ion-icon>
                    {{ date('d/m/Y', strtotime($event->date)) }}
                </p>
                <p class="card-owner">
                    <ion-icon name="people-outline"></ion-icon> {{ $eventOwner['name'] }}
                </p>
                <p id="event-participants">
                    <ion-icon name="people-outline"></ion-icon> X partipantes
                </p>
                <a href="#" class="btn btn-primary">Confirmar Presença</a>
                <h4>Evento conta com: </h4>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li>
                            <ion-icon name="play-outline"></ion-icon> {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12">
                <h5>Sobre o Evento</h5>
                <p>{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection

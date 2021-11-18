@extends('layouts.main')

@section('title', 'HD Events - ' . $event->title)

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Dashboard</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count(events) > 0)
        @else
            <p>
                Voce ainda não tem eventos, <a href="/events/create">Criar Evento</a>
            </p>
        @endif
    </div>

@endsection

@extends('layouts.main')

@section('title', 'HD Events - Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Dashboard</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $event->title }}</td>
                            <td>0</td>
                            <td>
                                <a href="#">[Editar]</a>
                                <a href="#">[Excluir]</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>
                Voce ainda não tem eventos, <a href="/events/create">Criar Evento</a>
            </p>
        @endif
    </div>

@endsection

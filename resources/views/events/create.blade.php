@extends('layouts.main')

@section('title', 'HD Events - Criar Eventos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" name="title" id="title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city" class="form-control" />
            </div>
            <div class="form-group">
                <label for="private">O evento é privado</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>

@endsection

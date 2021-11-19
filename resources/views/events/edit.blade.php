@extends('layouts.main')

@section('title', 'HD Events - Editar Eventos')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h2>Criar um evento</h2>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="image">Imagem do Evento</label>
                <input type="file" name="image" id="image" class="form-control-file" />
            </div>
            <img src="/img/events/{{ $event->image }}" alt="" class="img-preview">
            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" />
            </div>

            <div class="form-group">
                <label for="date">Data Evento</label>
                <input type="date" name="date" id="date" class="form-control"
                    value="{{ $event->date->format('Y-m-d') }}" />
            </div>

            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" name="city" id="city" class="form-control" value="{{ $event->city }}" />
            </div>

            <div class="form-group">
                <label for="private">O evento é privado</label>
                <select name="private" id="private" class="form-control">
                    <option value="0" {{ $event->private == 0 ? 'selected' : '' }}>Não</option>
                    <option value="1" {{ $event->private == 1 ? 'selected' : '' }}>Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="description" id="description" class="form-control">{{ $event->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="items">Adicionar itens de Infraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja"> Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>

@endsection

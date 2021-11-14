@extends('layouts.main')

@section('title', 'HD Events - Produtos')

@section('content')

    <h4>Exibindo o produto: {{ $id }}</h4>
    <h5 class="text-mutted">Buscando por: {{ $busca }}</h5>

@endsection

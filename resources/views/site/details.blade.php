@extends('site.layout')

@section('conteudo')

<div class="container mt-3">
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12">
            <img src="{{ $produto->imagem }}" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <h1>{{ $produto->nome }}</h1>
            <p>{{ $produto->descricao }}</p>
            <p>R$ {{ round($produto->preco, 2) }} reais</p>
            <p>Postado por: {{ $produto->user->firstname }}</p>
            <p>Categoria: {{ $produto->categoria->nome }}</p>
            <button class="btn btn-success">Comprar</button>
        </div>
    </div>
</div>


@endsection
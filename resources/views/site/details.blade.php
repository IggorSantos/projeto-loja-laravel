@extends('site.layout')

@section('conteudo')

<div class="container mt-3">
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12">
            <img class="img-produto" src="{{ $produto->imagem }}" alt="">
        </div>
        <div class="col-md-6 col-sm-12">
            <h1>{{ $produto->nome }}</h1>
            <h5>R$ {{ number_format($produto->preco, 2, ',', '.') }} reais</h5>
            <p>{{ $produto->descricao }}</p>            
            <p>Postado por: {{ $produto->user->firstname }}</p>
            <p>Categoria: {{ $produto->categoria->nome }}</p>
            <button class="btn btn-success">Comprar</button>
        </div>
    </div>
</div>


@endsection
@extends('site.layout')

@section('conteudo')

<div class="container">
    <h3 class="mt-3">Categoria: {{ $categoria->nome }}</h3>
    <div class="row">
        @foreach($produtos as $produto)
            <div class="card col-md-3 mt-3">
                <img src="{{ $produto->imagem }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ Str::limit($produto->nome, 20) }}</h5>
                <p class="card-text">{{ Str::limit($produto->descricao, 10) }}</p>
                <a href="/produtos/{{ $produto->slug }}" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection


@extends('site.layout')

@section('conteudo')

<div class="container">
    <div class="row">
        @foreach($produtos as $produto)
        <div class="card col-md-3 mt-3">
            <img src="{{ $produto->imagem }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $produto->nome }}</h5>
            <p class="card-text">{{ Str::limit($produto->descricao, 10) }}</p>
            <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    @endforeach
    </div>

</div>



@endsection
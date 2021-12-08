@extends('layout.app')

@section('titulo', 'Loja Virtual')

@section('css')
    <style>
        .nome-loja {
            font-family: 'Gwendolyn', cursive;
            font-size: 100px;
            font-weight: bold;
        }
    </style>
@endsection

@section('conteudo')
<div class="card w-100 text-center">
    <div class="card-body">
        <h5 class="card-title nome-loja">Loja Virtual</h5>
        <h6 class="card-subtitle">Selecione sua opção</h6>
        <div class="btn-group">
            <a href="{{ route('categorias.index') }}" type="button" class="btn btn-outline-primary">Categorias</a>
            <a href="#" type="button" class="btn btn-outline-secondary">Produtos</a>
        </div>
    </div>
</div>
@endsection
@extends('layout.app')

@section('titulo', 'Categorias - Detalhes')

@section('conteudo')
    <div class="card w-100">
        <div class="card-body">
            <p><strong>Nome</strong>: {{ $categoria->nome }}</p>
            <p><strong>Descricao</strong>: {{ $categoria->descricao }}</p>
        </div>
        <div class="card-footer">
            <div class="btn-group">
                <a href="{{ route('categorias.index') }}" type="button" class="btn btn-outline-secondary">Voltar</a>
                <a href="{{ route('categorias.edit', $categoria->id) }}" type="button" class="btn btn-outline-warning">Alterar</a>
            </div>
        </div>
    </div>
@endsection
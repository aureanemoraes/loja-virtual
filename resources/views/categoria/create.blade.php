@extends('layout.app')

@section('titulo', 'Categoria')

@section('conteudo')
    <div class="card w-100">
        <div class="card-body">
            <h5 class="card-title">Cadastro nova categoria</h5>
            <form action="{{ route('categorias.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do produto...">
                    <label for="nome">Nome</label>
                  </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Descrição do produto..." id="descricao" name="descricao" rows="4"></textarea>
                    <label for="descricao">Descricao</label>
                </div>
                <div class="btn-group" role="group">
                    <a href="{{ route('categorias.index') }}" type="button" class="btn btn-outline-secondary">Voltar</a>
                    <button type="submit" class="btn btn-outline-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@extends('layout.app')

@section('titulo', 'Categoria')

@section('conteudo')
    <div class="table-responsive w-100">
        <table class="table table-hover">
            <thead>
                <th>Nome</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nome }}</td>
                        <td col-2>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('categorias.show', $categoria->id) }}" type="button" class="btn btn-outline-primary btn-sm">Ver</a>
                                <button type="submite" class="btn btn-outline-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="100%">
                        <div class="btn-group">
                            <a href="{{ route('inicio' )}}" type="button" class="btn btn-outline-dark">Página Inicial</a>
                            <a href="{{ route('categorias.create' )}}" type="button" class="btn btn-outline-success">Nova categoria</a>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
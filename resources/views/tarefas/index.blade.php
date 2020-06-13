@extends('layouts.layout')

@section('cabecalho')
    Tarefas
@endsection

@section('conteudo')
    <form action="post" class="form-group">
        <label for="nome">Tarefa:</label>
        <input type="text" name="nome" id="nome">
    <a href="{{ route('criar-tarefa') }}" class="btn btn-dark mb-2"></a>
    </form>
    <hr>
    <ul class="list-group">
        @foreach ($tarefas as $tarefa)
            <li class="list-group-item">{{ $tarefa }}</li>
        @endforeach
    </ul>
@endsection

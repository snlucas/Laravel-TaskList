@extends('layouts.layout')

@section('cabecalho')
    Tarefas
@endsection

@section('conteudo')
    <ul class="list-group">
        <li class="list-group-item">{{ $tarefa }}</li>
    </ul>
@endsection

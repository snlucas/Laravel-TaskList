@extends('layouts.layout')

@section('cabecalho')
    Tarefas
@endsection

@section('conteudo')
    <form method="post" action="{{ route('criar-tarefas') }}" class="form-group">
        @csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Tarefa</span>
            </div>
            <input type="text" name="nome" id="nome" class="form-control" aria-label="Tarefa">

            <div class="input-group-append">
                <button class="btn btn-dark btn-outline-secondary" type="button">
                    <svg class="bi bi-check2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </form>
    <hr>
    <ul class="list-group">
        @foreach ($tarefas as $tarefa)
            <li class="list-group-item">{{ $tarefa }}</li>
        @endforeach
    </ul>
@endsection

@extends('layouts.layout')

@section('cabecalho')
    <h1 class="border-bottom mb-4">Tarefas</h1>
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

    <ul class="list-group-md border list-group-flush">
        @foreach ($tarefas as $tarefa)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                <div class="justify-content-start">
                    @if($tarefa->concluido === '1')
                        <input class="mr-2" type="checkbox" onclick='window.location.assign("/tarefas/criar/{{ $tarefa->id }}")' checked>
                        <del>{{ $tarefa->tarefa }}</del>
                    @else
                        <input class="mr-2" type="checkbox" onclick='window.location.assign("/tarefas/criar/{{ $tarefa->id }}")'>
                        {{ $tarefa->tarefa }}
                    @endif
                </div>
                <a href="/tarefas/excluir/{{ $tarefa->id }}" class="btn btn-danger d-flex align-items-center">
                    <svg class="bi bi-x-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                    </svg>
                </a>
            </li>
        @endforeach
    </ul>

    <script>

    </script>
@endsection

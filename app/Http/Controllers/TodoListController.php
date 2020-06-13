<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $tarefas = Tarefas::all();

        return view('tarefas.index', compact('tarefas'));
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefas;
        $tarefa->tarefa = $request->nome;

        $tarefa->save();

        return redirect()->route('listar-tarefas');
    }
}

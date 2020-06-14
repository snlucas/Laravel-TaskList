<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index()
    {
        $tarefas = Tarefas::all()->reverse();

        return view('tarefas.index', compact('tarefas'));
    }

    public function store(Request $request)
    {
        $tarefa = new Tarefas;
        $tarefa->tarefa = $request->nome;
        $tarefa->save();

        return redirect()->route('listar-tarefas');
    }

    public function update($id){
        $tarefa = Tarefas::find($id);

        if($tarefa->concluido === '1') {
            $tarefa->concluido = 'false';
        } else {
            $tarefa->concluido = '1';
        }

        $tarefa->save();

        return redirect()->route('listar-tarefas');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function listarTarefas(){
        return view('tarefas.index');
    }
}

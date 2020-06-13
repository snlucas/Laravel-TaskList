<?php

namespace App\Http\Controllers;

use App\Tarefas;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $tarefas = Tarefas::all();

        return view('tarefas.index', compact('tarefas'));
    }

    public function store(Request $request)
    {
    }
}

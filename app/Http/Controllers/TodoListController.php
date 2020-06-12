<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index(Request $request)
    {

        return view('tarefas.index');
    }
}

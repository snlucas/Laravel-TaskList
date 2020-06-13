<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];
}

<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //Index Public Function
    public function index()
    {
    	$todos = ToDo::all();

    	return view('todos')->with('todos', $todos);
    }
}
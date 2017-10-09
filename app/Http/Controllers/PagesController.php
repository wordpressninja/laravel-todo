<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//@new
	public function new() {
		//echo "some data here";
		return view('new');
	}
}

//ToDos - toDo
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
    public function store(Request $request)
    {
    	//dd($request->all());
        $todo = new ToDo;
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
    public function delete($id)
    {
        //dd($id);
        $todo = ToDo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function update($id) 
    {
        $todo = ToDo::find($id);
        return view('update')->with('todo', $todo);
    }
    public function save(Request $request, $id)
    {
        //dd($request->all());
        $todo = ToDo::find($id);
        $todo->todo = $request->todo_update;
        $todo->save();

        return redirect()->route('todos');
    }

}

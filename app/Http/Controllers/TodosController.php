<?php
namespace App\Http\Controllers;
use App\ToDo;
use Session;
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
        Session::flash('success', 'Your ToDo was created!');
        return redirect()->back();
    }
    public function delete($id)
    {
        //dd($id);
        $todo = ToDo::find($id);
        $todo->delete();
        Session::flash('success', 'Your ToDo was deleted!');       
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
        Session::flash('success', 'Your ToDo was saved!');
        return redirect()->route('todos');
    }
    public function completed($id) 
    {
        $todo = ToDo::find($id);
        $todo->completed = 1;
        $todo->save();
        Session::flash('success', 'Your ToDo was completed!');      
        return redirect()->back();
    }

    public function share()
    {
        
    }

}

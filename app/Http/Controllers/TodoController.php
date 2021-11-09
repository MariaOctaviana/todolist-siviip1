<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view("pages.todo",[
            "todo" => \App\Models\Todo::all()
        ]);
    }

    public function tambahTodo(Request $request){
        $todo = new \App\Models\Todo;
        $todo->name = $request->name;
        $todo->status = "pending";
        $todo->save();

        return redirect("/todo");
    }

    public function hapusTodo($id){
        \App\Models\Todo::destroy($id);

        return redirect("/todo");
    }

    public function updateTodo($id){
        $todo = \App\Models\Todo::find($id);

        $todo->status="completed";
        $todo->save();

        return redirect("/todo");
    }
}

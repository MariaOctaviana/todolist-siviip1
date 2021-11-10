<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        return view("pages.todo",[
            "todo" => Todo::all()
        ]);
    }

    public function tambahTodo(Request $request){
        $request->validate([
            "name" => "required|min:20"
        ]);

        // 1. Cara Eloquent I
        // $todo = new Todo;
        // $todo->name = $request->name;
        // $todo->status = "pending";
        // $todo->save();

        // 2. Cara Query Builder
        // DB::table("tbltodo")->insert([
        //     "name" => $request->name,
        //     "status" => "pending"
        // ]);

        // 3. Cara Eloquent II - Mass Assignment
        Todo::create([
            "name" => $request->name,
            "status" => "pending"
        ]);


        return redirect()
            ->route("todo.index")
            ->with("info","Berhasil Tambah Todo");
    }

    public function hapusTodo($id){
        // 1. Cara Eloquent
        // Todo::destroy($id);

        // 2. Cara Query Builder
        DB::table("tbltodo")->delete($id);

        return redirect()
            ->route("todo.index")
            ->with("info","Berhasil Hapus Todo");
    }

    public function updateTodo($id){
        // 1. Cara Eloquent I
        // $todo = Todo::find($id);

        // $todo->status="completed";
        // $todo->save();

        // 2. Cara Query Builder
        // DB::table("tbltodo")
        //     ->where("id",$id)
        //     ->update([
        //         "status" => "completed"
        //     ]);

        // 3. Cara Eloquent II
        Todo::find($id)
            ->update([
                "status" => "completed"
            ]);

        return redirect()
                ->route("todo.index")
                ->with("info","Berhasil Update Todo");
    }
}

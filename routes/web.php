<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get("/todo",[TodoController::class,"index"])->name("todo.index");
    Route::post("/todo",[TodoController::class,"tambahTodo"])->name("todo.tambah");
    Route::get("/todo/hapus/{id}",[TodoController::class,"hapusTodo"])->name("todo.hapus");
    Route::get("/todo/update/{id}",[TodoController::class,"updateTodo"])->name("todo.update");
});


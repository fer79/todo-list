<?php

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
    return view('tasksListHeader');
});

Route::get('tasksList', [App\Http\Controllers\TasksController::class, 'tasksList']);
Route::post('/tasks/end', 'App\Http\Controllers\TasksController@taskEnd')->name('tasks.end');
Route::post('/tasks/destroy', 'App\Http\Controllers\TasksController@destroyTask')->name('tasks.destroy');
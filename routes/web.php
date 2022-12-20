<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\projectsControl;

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

Route::get('/',[homeControl::class,"index"]);

Route::get("/home1",[homeControl::class,"redirectFunct"]);

Route::get("/coordinator",[homeControl::class,"coordinatorHome"]);

Route::get('/manageprojects',[projectsControl::class,"manageProjects"]);

Route::get("/delete/{id}",[projectsControl::class,"delete"]);


Route::get('/form', function () {
    return view('coordinator.coordinatoraddprojects');
});

Route::POST('/createproject',[projectsControl::class,"create"]);




Route::get("/supervisor",[homeControl::class,"supervisorHome"]);

Route::get('/supervisormanage',[projectsControl::class,"supervisorManage"]);

Route::get("/update/{id}",[projectsControl::class,"showProject"]); 

Route::POST("/updateproject",[projectsControl::class,"update"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\CourseRqsController;
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
Route::get('/user', [UsersController::class, 'getListUser']);
Route::get('/class',[ClassesController::class, 'getListClass']);
Route::get('/subject',[SubjectsController::class,'getListSubject']);

Route::post('/user', [UsersController::class, 'addUser']);
Route::post('/class', [ClassesController::class, 'addClass']);
Route::post('/subject', [SubjectsController::class, 'addSubject']);


Route::get('',function(){
    return view('home');
}
);
Route::get('/home',function(){
    return view('home');
});

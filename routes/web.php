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
// lay danh sach
Route::get('/listUser', [UsersController::class, 'getListUser']);
Route::get('/listClass',[ClassesController::class, 'getListClass']);
Route::get('/listSubject',[SubjectsController::class,'getListSubject']);
// lay thong tin tung thang
Route::get('/getUser/{id}', [UsersController::class, 'getUser']);

// them
Route::post('/addUser', [UsersController::class, 'addUser']);
Route::post('/addClass', [ClassesController::class, 'addClass']);
Route::post('/addSubject', [SubjectsController::class, 'addSubject']);

// chinh sua
Route::put('/upUser/{id}',[UsersController::class, 'upUser']);
Route::put('/upClass/{id}', [ClassesController::class, 'upClass']);
Route::put('/upSubject/{id}', [SubjectsController::class, 'upSubject']);

// xoa
Route::delete('/delUser/{id}',[UsersController::class, 'delUser']);


Route::get('',function(){
    return view('home');
}
);
Route::get('/home',function(){
    return view('home');
});

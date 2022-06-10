<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;

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
    return redirect('/books/list');
});
Route::get('/books/list' , [BookController::class , 'index']);
Route::get('/books/create',[BookController::class , 'create']);
Route::get('/books/update/{id}',[BookController::class , 'edit']);
Route::post('/books/store' , [BookController::class , 'store']);
Route::post('/books/update/{id}' , [BookController::class , 'update']);
Route::get('/books/detail/{id}' , [BookController::class, 'show']);
Route::get('/books/delete/{id}' , [BookController::class, 'destroy']);

Route::view('/file' , 'file');

Route::post('/file/store' , function(Request $request){
    //hasFile

    $file = $request -> file('myFile');

    // Storage::put('myfile.jpg', $file);
     $storeResult = $file->store('public/bookImages'); // file est le name de votre input dans file.blade.php
    // return $storeResult;
    return $request->all();
});
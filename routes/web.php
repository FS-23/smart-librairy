<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;


Route::get('/', function () {
    return redirect('/books/list');
});


Route::get('/books/list' , [BookController::class , 'index']);
Route::get('/books/create',[BookController::class , 'create']);
Route::get('/books/update/{id}',[BookController::class , 'edit']);
Route::post('/books/store' , [BookController::class , 'store']);
Route::post('/books/update/{id}' , [BookController::class , 'update']);
Route::get('/books/detail/{id}' , [BookController::class, 'show']);
Route::get('/books/delete/{id}' , [BookController::class, 'destroy'])->middleware('isTokenValid');

Route::view('/file' , 'file');

Route::post('/file/store' , function(Request $request){
    //hasFile

    $file = $request -> file('myFile');

    // Storage::put('myfile.jpg', $file);
     $storeResult = $file->store('public/bookImages'); // file est le name de votre input dans file.blade.php
    // return $storeResult;

    $fileName = str_replace('public' , 'storage' , $storeResult);
     return  $fileName;
});

Route::get('/books/filter' , [BookController::class , 'filter'])->middleware('isRealAdmin');

Route::post('/books/add-comments/{id}', [CommentController::class , 'store']);
Route::get('/books/delete-comment/{book_id}/{commnent_id}' , [CommentController::class , 'destroy']);
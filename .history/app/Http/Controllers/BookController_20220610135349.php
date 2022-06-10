<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {

        return view('book.list', ['books' => Book::all()]);
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $data = $request -> all();
        $file = $request -> file('bookImage');
        $fileStoreResult = $file->store('/public/bookImages');
        $fileName = str_replace('public', 'storage' , $fileStoreResult);
        $data['image'] = $fileName;
        $createdBook = Book::create($data);
        return redirect('/books/list');
    }

    
    public function show($id)
    {
        return  view('book.detail' , ["book" => Book::find($id)]);
    }

   
    public function edit($id)
    {
        return view('book.update' , ["book" => Book::find($id)]);
    }


    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if($request->hasFile("bookImage")){
            $file = $request -> file('bookImage');
            $fileStoreResult = $file->store('/public/bookImages');
            $fileName = str_replace('public', 'storage' , $fileStoreResult);
            $$book -> image = $fileName;
        }

        $book ->update($request->all());
        return redirect('/books/list');
        //
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect('/books/list');
    }
}

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
        $createdBook = Book::create($data);
        return redirect('/books/list');
    }

    
    public function show(Book $book)
    {
     
    }

   
    public function edit(Book $book)
    {
        //
    }


    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index(Request $request)
    {

        $category = $request -> input('category' , '');

        if(empty($category))
            return  view('book.list', ['books' => Book::all()]);
        else
            return view('book.list', ["books" => Book::where('categorie' , $category)->get()]);

    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            "title" => "required|min:50",
            "description" =>  "min:30|max:100"
        ]);
        $data = $request -> all();

        // if(empty($data['title'] && strlen($data['title']) < 12)){
        //     return "Veuillez specifier le titre";
        // }


        // return $data;
        $file = $request -> file('bookImage');
        $fileStoreResult = $file->store('/public/bookImages');
        $fileName = str_replace('public', 'storage' , $fileStoreResult);
        
      //  return $fileStoreResult;
        $data['image'] = $fileName;
        $createdBook = Book::create($data);
        return redirect('/books/list');
    }

    
    public function show($id)
    {


        $book = Book::find($id);
        if(!$book)
          return redirect('/books/list');

        $bookComments = $book -> comments;
     
        return  view('book.detail' , ["book" => $book  , "comments" => $bookComments]);
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
            $book -> image = $fileName;
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

    public function filter(Request $request){
          $category = $request -> input('category' , '');
        //   if($request -> input('role') != "admin"){
        //     return response()->json([
        //         "success" =>  false,
        //         "message" =>  "You are not authorized"
        //     ], 401);
        //   }
          return Book::where('categorie' , $category)->get();
    }

}

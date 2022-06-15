<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

  
    public function store(Request $request , $id)
    {
        Comment::create($request -> all());
        return redirect('/books/detail/'.$id);
    }

   
    public function show(Comment $comment)
    {
        //
    }

 
    public function edit(Comment $comment)
    {
        //
    }

 
    public function update(Request $request, Comment $comment)
    {
        //
    }

  
    public function destroy($book_id , $commnent_id)
    {
        Comment::destroy($commnent_id);

        return redirect('/books/detail/'.$book_id);
    }
}

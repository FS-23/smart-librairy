@extends('layout.layout')

@section('content')
    <style>
          .comment-container:hover {
            background: rgb(228, 226, 226);
            cursor: pointer
          }

        .comment-container:hover .delete-comment-icon{
            display: inline !important
        }
    </style>
    <div class="col-6 mt-5 shadow-sm p-3 m-auto">
         <div>
             <img src="{{ asset($book->image) }}" alt="Book's image" width="70" height="100" style="background: dimgrey"> 
             <div>
                 <strong>{{ $book->title }}</strong>
             </div>
             <div>
                <i class="text-secondary">{{ $book -> author }}</i>
             </div>
         </div>
         <div class="mt-3">
              <strong>Résumé:</strong> {{ $book -> description }}
         </div>
         <div class="text-end mt-3">
             <a href="/books/update/{{ $book->id }}" class="btn btn-primary">Edit</a>
             <a href="/books/delete/{{ $book->id }}?token=1234" class="btn btn-danger">Delete</a>
             <a href="/books/list" class="btn btn-secondary">List</a>
         </div>
         <div>
             <h4>Comments</h4>
             <div>
                 @if($comments ->count() > 0)
                 <div  style="border-left: 3px solid blue">
                    @foreach($comments as $key => $comment)
                        <div class="p-3  comment-container">
                            <span class="fas fa-comment text-secondary me-3"></span> 
                            {{ $comment -> content }}
                            <a href="/books/delete-comment/{{ $book->id }}/{{ $comment->id }}">
                                <span class="ms-3 fas fa-trash text-danger delete-comment-icon" style="display: none"></span>
                            </a>
                        </div>
                    @endforeach
                 </div>
                      
                 @else 
                   <h6> No comment available </h6>
                 @endif
             </div>
             <div class="mt-3">

                <form action="/books/add-comments/{{ $book -> id }}" method="post">

                    @csrf
                    <strong>New comment</strong>
                    <div class="d-flex justify-content-between">
                        <input type="hidden" value="{{ $book->id }}" name="book_id">
                        <input type="text" class="form-control" style="width: 80%" name="content">
                        <button class="btn btn-primary" style="width: 18%">Send</button>
                    </div>
                </form>
             </div>
         </div>


    </div>
@endsection
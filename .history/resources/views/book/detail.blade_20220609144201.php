@extends('layout.layout')

@section('content')
    <div class="col-6 mt-5 shadow-sm p-3 m-auto">
         <div>
             <img src="" alt="Book's image" width="70" height="100" style="background: dimgrey"> 
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
             <a href="/books/delete/{{ $book->id }}" class="btn btn-danger">Delete</a>
             <a href="/books/list" class="btn btn-secondary">List</a>
         </div>
    </div>
@endsection
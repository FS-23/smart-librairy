
 @extends('layout.layout')

 @section('content')
     <div class="mt-5 container">
             <div class="d-block text-end">
                 <a href="/books/create" class="btn btn-outline-primary mt-5">New Book</a>
             </div>
             <div class="row mx-0">
                 @foreach($books as $book)
                     <div style="" class="mt-3 col-12 col-sm-6 col-lg-4">
                         <div class="h-100">
                             <div class="bg-light p-3 d-flex justify-content-center align-items-center" style="height: 150px">
                                 <h3>{{ $book -> title }}</h3>
                             </div>
                             <div class="bg-dark text-white p-3 ">
                                 <p style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis" class="">{{ $book -> description }}</p>
                                 <a href="/blog/detail/{{ $book->id }}" class="btn btn-primary">More</a>
                             </div>
                         </div>
                     </div>
                 @endforeach
 
             </div>
     </div>
 @endsection
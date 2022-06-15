
 @extends('layout.layout')

 @section('content')
     <div class="mt-3 container">
             <div class="row mx-0">
                  <div class="col-3 mt-5 pt-5 " style="">
                      <div class="border">
                           <h4 class="bg-light p-3">Filter</h4>
                           <div class="p-2">
                               <h6>Category</h6>
                               <form action="/books/list" method="get">
                                    @csrf
                                    <div class="mt-2">
                                        <input type="radio" class=""  value="" name="category">  All
                                    </div>
                                    <div class="mt-2">
                                        <input type="radio" class=""  value="thriller" name="category">  Thriller
                                    </div>
                                    <div class="mt-2">
                                    <input type="radio" class=""    value="romance" name="category">  Romance
                                    </div>
                                    <div class="mt-2">
                                        <input type="radio" class=""    value="dramatic" name="category">  Drama
                                    </div>
                                    <div class="mt-2">
                                        <input type="radio" class=""    value="personal developpement" name="category">  Personal developpment
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-info"> Filter </button>
                                    </div>
                               </form>
                           </div>
                            
                      </div>
                  </div>

                  <div class="col-9">
                    <div class="d-flex justify-content-between align-items-center px-2">
                      <h4 class="h5">Books list</h4>   <a href="/books/create" class="btn btn-outline-primary mt-5">New Book</a>
                    </div>
                    <div class="row mx-0">
                        @foreach($books as $book)
                            <div style="" class="mt-3 col-12 col-sm-6 col-lg-4">
                                <div class="h-100">
                                    <div class="bg-light p-3 d-flex justify-content-center align-items-center" style="height: 150px">
                                        <h3>{{ $book -> title }}</h3>
                                        <img src="{{ url($book->image) }}" width="70" height="100" alt="">
                                    </div>
                                    <div class="bg-dark text-white p-3 ">
                                        <p style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis" class="">{{ $book -> description }}</p>
                                        <a href="/books/detail/{{ $book->id }}" class="btn btn-primary">More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
        
                    </div>
                  </div>
             </div>
     </div>
 @endsection
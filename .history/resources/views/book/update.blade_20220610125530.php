@extends('layout.layout')

@section('content')

   <div class="col-6 shadow-sm mt-5 p-3 m-auto">
    <form action="/books/update/{{ $book->id }}" method="post">
        @csrf
        <h3>Add book</h3>
        <div style="height: 150px" class="bg-light mt-3 d-flex justify-content-center align-items-center">
            Ajouter l'image
            <img src="" alt="">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book title</label>
            <input type="text" value="{{ $book->title }}" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book author</label>
            <input type="text" value="{{ $book -> author }}" class="form-control" placeholder="author"  name="author">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book description</label>
            <textarea type="text" class="form-control" rows="10" placeholder="description"  name="description">{{ $book -> description }}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book category</label>
            <select value="{{ $book->categorie }}" name="categorie" id="" class="form-select">
                <option value="">Choose one...</option>
                <option value="thriller">Thriller</option>
                <option value="romance">Romance</option>
                <option value="dramatic">Draman</option>
            </select>
        </div>

        <div class="mt-5">
           <button class="btn btn-outline-info">Save</button>
           <a href="/book/list" class="btn btn-outline-danger">Cancel</a>
        </div>
   </form>
   </div>
@endsection
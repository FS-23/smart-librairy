@extends('layout.layout')

@section('content')

   <div class="col-6 shadow-sm mt-5 p-3 m-auto">
    <form action="/books/store" method="post">
        @csrf
        <h3>Add book</h3>
        <div style="height: 150px" class="bg-light mt-3 d-flex justify-content-center align-items-center">
            Ajouter l'image
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book title</label>
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book author</label>
            <input type="text" class="form-control" placeholder="author"  name="author">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book description</label>
            <textarea type="text" class="form-control" placeholder="description"  name="description"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book category</label>
            <select name="categorie" id="" class="form-select">
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
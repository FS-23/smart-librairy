@extends('layout.layout')

@section('content')

   <div class="col-11 col-sm-6 shadow-sm mt-5 p-3 m-auto">
    <form action="/books/store" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Add book</h3>
        <div id="choose-image-container" style="height: 150px" class="bg-light mt-3 d-flex justify-content-center align-items-center">
            Ajouter l'image
            <input type="file" accept="image/*" style="display: none" id="bookFile" name="bookImage" required>
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book title</label>
            <input required type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book author</label>
            <input  required type="text" class="form-control" placeholder="author"  name="author">
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book description</label>
            <textarea  required type="text" class="form-control" rows="10" placeholder="description"  name="description"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="" class="form-label">Book category</label>
            <select  required  name="categorie" id="" class="form-select">
                <option value="">Choose one...</option>
                <option value="thriller">Thriller</option>
                <option value="romance">Romance</option>
                <option value="dramatic">Drama</option>
                <option value="dramatic">Personal developpment</option>
            </select>
        </div>

        <div class="mt-5">
           <button class="btn btn-outline-info">Save</button>
           <a href="/book/list" class="btn btn-outline-danger">Cancel</a>
        </div>
   </form>
   </div>

   <script>
       window.onload = function(){
            console.log('hello world');
            let fileInput = document.querySelector('#bookFile');
            let imageContainer = document.querySelector('#choose-image-container');

            imageContainer.addEventListener('click' , function(){
                fileInput.click();
            })

            fileInput.addEventListener('change' , function(){
                 console.logt('files:', fileInput.files)
            })


           
       }
   </script>
@endsection
@extends('layout.layout')

@section('content')

   <div class="col-6 shadow-sm mt-5 p-3 m-auto">
    <form action="/books/update/{{ $book->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Add book</h3>
        <div id="choose-image-container" style="height: 150px ; cursor:pointer" class="cursor-pointer bg-light mt-3 d-flex justify-content-center align-items-center">
            <img  style="width: 100px ;height: 95%" id="imagePreview" src="{{ url($book -> image) }}" alt="image">
            <input type="file" accept="image/*" style="display: none" id="bookFile">
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
           <a href="/books/list" class="btn btn-outline-danger">Cancel</a>
        </div>
   </form>
   </div>

   <script>
    window.onload = function(){
         console.log('hello world');
         let fileInput = document.querySelector('#bookFile');
         let imageContainer = document.querySelector('#choose-image-container');
         let imagePreview = document.querySelector('#imagePreview')
         imageContainer.addEventListener('click' , function(){
             fileInput.click();
         })

         fileInput.addEventListener('change' , function(){
              console.log('files:', fileInput.files);

              let reader = new FileReader();

              reader.onload = function(){
                 // console.log('result:', reader.result);

                 imagePreview.src = reader.result;
                 imagePreview.style.display = '';
                 document.querySelector('#choose-txt').style.display = 'none'
                 fileInput.name = "bookImage"
              }
              reader.readAsDataURL(fileInput.files[0])

         })
    }
</script>
@endsection
<form action="/file/store" method="POST" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="text" name="name">

      <button>Save</button>

      @csrf
</form>
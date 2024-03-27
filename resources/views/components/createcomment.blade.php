<form action="/posts/{{$post->id}}/comments" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">name</label>
      <input name="name" class="form-control" id="name" >
   
    </div>
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
   
    <div class="mb-3">
        <label for="body" class="form-label">The comment</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
       
      </div>
      @error('body')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    <button type="submit" class="btn btn-primary">save</button>
  </form>
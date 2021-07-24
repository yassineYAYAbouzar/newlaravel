
<x-app-layout>
    <div class="container">
<form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" value="{{$blog->title}}" placeholder="Enter title" name="title">

    </div>


    <div class="form-group">
      <label for="body">content</label>
      <textarea name="body" class="form-control">{{$blog->body}}</textarea>
    </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</x-app-layout>


<x-app-layout>
    <div class="container">
<form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="title">

    </div>


    <div class="form-group">
      <label for="body">content</label>
      <textarea name="body" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
          @foreach ($categories as $item)
          <option value="{{$item->id}}">{{$item->name}}</option>
          @endforeach

        </select>
      </div>
    <div class="form-group">
      <input type="file" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</x-app-layout>

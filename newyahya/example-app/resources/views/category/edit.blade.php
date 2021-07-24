
<x-app-layout>
    <div class="container">
<form action="{{route('category.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">name</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="name">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</x-app-layout>

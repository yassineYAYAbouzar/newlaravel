<x-app-layout>

    <a href="{{route('blog.create')}}" class="btn btn-primary m-2">ADD</a>
    <a href="{{route('category.create')}}" class="btn btn-primary m-2">ADD Category</a>

    <div class="row mt-5 mx-auto">
        <ul class="list-group col-4">

              @foreach ($categories as $item)
              <a href="" class="list-group-item">{{$item->name}} {{$item->blog->count()}}</a>
              @endforeach


          </ul>
          {{-- -------------------- --}}

          <div class="col-8 row">

            @foreach ($blogs as $blog)

            <div class="card ml-auto mb-3"  style="width: 16rem;">
              <img src="{{asset('storage/'.$blog->image)}}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="" class="card-title">{{$blog->title}}</a>
                <p class="card-text">{{$blog->body}}</p>
                <div class="row"><a href="{{route('blog.edit', $blog->id)}}" class="btn btn-primary">update</a>
                    <form action="{{route('blog.destroy',$blog->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2">delete</button>
                    </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>

      </div>
</x-app-layout>

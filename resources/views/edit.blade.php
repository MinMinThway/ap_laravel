@extends("layout")
@section("content")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
              Edit Blog
            </div>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $post->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $post->description }}</textarea>
                </div>
                <button class="btn btn-success">Submit</button>
                <a href="{{ route('posts.index')}}" class="btn btn-light">Back</a>
            </form>
          </div>
    </div>
@endsection
@extends("layout")
@section("content")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
              Blog Sample
              <a href="{{ route('posts.create') }}" class="btn btn-success ml-auto">Add News+</a>
            </div>
          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success')}}
            </div>
          @endif

         @foreach ($datas as $data)
         <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">{{ $data->description }}</p>
            <a href="{{ route('posts.show', $data->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('posts.edit', $data->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $data->id) }}" method="post" class="d-inline-block">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-danger">Delete</button>
            </form>
          </div><hr>
         @endforeach
          </div>
    </div>
@endsection
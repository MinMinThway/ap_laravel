@extends("layout")
@section("content")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
              Blog Sample
              <a href="{{ route('posts.index') }}" class="btn btn-success ml-auto">Back</a>
            </div>
         <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
    
          </div><hr>

          </div>
    </div>
@endsection
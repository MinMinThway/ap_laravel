@extends("layout")
@section("content")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
              Create Blog
            </div>
            @if ($errors->any())
         <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
          </div>
    </div>
@endsection
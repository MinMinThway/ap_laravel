@extends("layout")
@section("content")
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
              Blog Sample
            </div>
         @foreach ($datas as $data)
         <div class="card-body">
            <h5 class="card-title">{{ $data->name }}</h5>
            <p class="card-text">{{ $data->description }}</p>
            <a href="#" class="btn btn-primary">View</a>
          </div><hr>
         @endforeach
          </div>
    </div>
@endsection
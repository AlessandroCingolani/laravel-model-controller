@extends('layouts.main')

@section('content')
    <h1 class="text-center my-3">Movie detail</h1>
    <div class="card" style="width: 30rem;">
        <img src="https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled.png" class="card-img-top"
            alt="...">
        <div class="card-body">
            <h2>{{ $movie->title }}</h2>
            <h4>{{ $movie->original_title }}</h4>
            <strong>Trama:</strong>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, vero praesentium?
                Sed, aut? Sint nam quos praesentium, possimus voluptatibus quasi ipsa, repellendus iste recusandae
                voluptates doloremque perspiciatis velit. Fuga, perspiciatis.</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Return Home</a>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('content')
    <h1 class="text-center my-3">Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Original title: {{ $movie->original_title }}
                        </h6>
                        <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                        <p class="card-text">Year: {{ $movie->date }}</p>
                        <p class="card-text">Vote: {{ $movie->vote }}</p>
                        <a href="{{ route('detail', ['id' => $movie->id]) }}" class="card-link">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Genres</h1>
    @foreach ($genres as $genre)
        <div class="card" style="width: 18rem; display:inline-block;">
            @if ($genre->image !== null && $genre->image !== '')
                <img class="card-img-top" src="{{ $genre->image }}" alt="genre image">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $genre->name }}</h5>
                <a href="{{ route('song.index', $genre->id) }}" class="btn btn-primary">{{ $genre->name }}</a>
            </div>
        </div>
    @endforeach

    
</div>
@endsection

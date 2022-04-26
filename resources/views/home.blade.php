@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($genres as $genre)
        <div class="card" style="width: 18rem; display: inline-block; margin: 10px;">
            @if ($genre->image !== null && $genre->image !== '')
                <img class="card-img-top" style="width: 246px; height: 150px; margin: auto; display: block; padding-top: 15px" src="{{ $genre->image }}" alt="genre image">
            @endif
            <div class="card-body">
                <a href="{{ route('song.index', $genre->id) }}" class="btn btn-primary" style="display: block;">{{ $genre->name }}</a>
            </div>
        </div>
    @endforeach    
</div>
@endsection

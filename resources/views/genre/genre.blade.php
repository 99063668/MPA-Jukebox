@extends('layouts.app')

@section('content')
<a href="{{ route('home') }}">Back</a>
  <h1>{{$genre->name}}</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Song</th>
        <th scope="col">Album</th>
        <th scope="col">Artist</th>
        <th scope="col">Duration</th>
        {{-- <th scope="col">Genre</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($songs as $song)
        <tr>
          <td><a href="{{ route('detail.show', 1) }}">{{$song->song}}</a></td>
          <td>{{$song->album}}</td>
          <td>{{$song->artist}}</td>
          <td>{{$song->duration}}</td>
          {{-- <td>{{$song->genre}}</td> --}}
        </tr>
        {{-- <? var_dump($song->genre); ?> --}}
      @endforeach
    </tbody>
  </table>
@endsection

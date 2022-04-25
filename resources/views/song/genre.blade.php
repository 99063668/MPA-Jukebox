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
        <th scope="col">Genre</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($songs as $song)
        <tr>
          <td><a href="{{ route('song.show', $song->id) }}">{{$song->title}}</a></td>
          <td>{{$song->album}}</td>
          <td>{{$song->artist}}</td>
          <td>{{$song->duration}}</td>
          <td>{{$song->genre->name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

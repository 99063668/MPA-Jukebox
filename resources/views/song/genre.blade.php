@extends('layouts.app')

@section('content')
<a href="{{ route('home') }}">Back</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Song</th>
        <th scope="col">Album</th>
        <th scope="col">Artist</th>
        <th scope="col">Duration</th>
        <th scope="col">Genre</th>
        <th scope="col">Add to playlist</th>
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
          <td><input type="checkbox" id="add" name="add" style="width: 100px;"></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

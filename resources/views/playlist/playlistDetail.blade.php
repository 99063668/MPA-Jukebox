@extends('layouts.app')

@section('content')
<a href="{{ route('playlist.index') }}">Back</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Song</th>
      <th scope="col">Album</th>
      <th scope="col">Artist</th>
      <th scope="col">Duration</th>
      <th scope="col">Genre</th>
      <th scope="col">Play</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($playlist_song as $song)
        <tr>
          <td><a href="{{ route('song.show', $song->id) }}">{{$song->title}}</a></td>
          <td>{{$song->album}}</td>
          <td>{{$song->artist}}</td>
          <td>{{$song->duration}}</td>
          <td>{{$song->genre->name}}</td>
          <td>
            <audio controls>
              <source src="{{URL::asset('assets/audio/')}}/{{$song->audio}}" type="audio/mpeg"> 
            </audio>
          </td>
        </tr>
      @endforeach
      
    @if (count($playlist_song) == 0)
      <tr>
        <td colspan="6">No songs found in this playlist</td>
      </tr>
    @endif
  </tbody>
</table>
@endsection

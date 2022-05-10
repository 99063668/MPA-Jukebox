@extends('layouts.app')

@section('content')
  <a href="{{ route('playlist.create') }}">New playlist</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Playlist</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($playlists as $playlist)
      <tr>
        <td><a href="{{ route('playlist.overview', $playlist->id) }}">{{$playlist->name}}</a></td>
      </tr>
      @endforeach
        
      @if (count($playlists) == 0)
        <tr>
          <td colspan="6">No playlists found</td>
        </tr>
      @endif
    </tbody>
  </table>
@endsection

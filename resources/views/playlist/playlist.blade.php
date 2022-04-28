@extends('layouts.app')

@section('content')
  <h3>Playlist</h3>
    @foreach ($playlists as $playlist)
        <tr>
          <td><a href="{{ route('playlist.show', $playlist->id) }}">{{$playlist->name}}</a></td>
        </tr>
    @endforeach
@endsection

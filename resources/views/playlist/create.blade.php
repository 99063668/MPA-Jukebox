@extends('layouts.app')

@section('content')
  <a href="{{ route('playlist.index') }}">Back</a>

  <input type="text" id="title" placeholder="Title.."></input>
  <button id="createPlaylist" onclick="{{ route('playlist.create') }}">Create playlist</button>
@endsection

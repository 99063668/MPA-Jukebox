@extends('layouts.app')

@section('content')
  <a href="{{ route('playlist.index') }}">Back</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Create new playlist</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <form action="{{ route('playlist.choosenTitle') }}" method="POST">
        @csrf 
        <td>
            <input type="text" id="title" name="title" placeholder="Playlist name"></input>
            <button id="createPlaylist" onclick="event.preventDefault(); this.form.submit();">Create playlist</button>
        </td>
        </form>
      </tr>
    </tbody>
  </table>
@endsection

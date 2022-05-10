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
        <th scope="col">Play</th>
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
            <td>
              <audio controls>
                <source src="{{URL::asset('assets/audio/')}}/{{$song->audio}}" type="audio/mpeg"> 
              </audio>
            </td>
            <form action="{{ route('song.selectSong') }}" method="POST">
              @csrf 
              <td><input type="checkbox" id="checkbox" name="song_id" value="{{$song->id}}" onclick="event.preventDefault(); this.form.submit();" style="width: 100px;"></td>
            </form>
          </tr>
        @endforeach
        
      @if (count($songs) == 0)
        <tr>
          <td colspan="6">No songs found for this genre</td>
        </tr>
      @endif
    </tbody>
  </table>

  @if ($hasSongs)
    <a href="{{ route('playlist.addSelected', $playlist->id) }}">Add music to playlist</a>
  @endif
@endsection

{{-- 
  1. seeder voor detail pagina playlist
  2. playlist aanmaken
  3. kiezen in welke playlist nummer moet worden toegevoegd
--}}

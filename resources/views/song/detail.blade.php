@extends('layouts.app')

@section('content')
<a href="{{ route('song.index', $song->genre->id) }}">Back</a>
    <tbody>
      <p><b>Song:</b> {{$song->title}}</p>
      <p><b>Album:</b>  {{$song->album}}</p>
      <p><b>Artist:</b>  {{$song->artist}}</p>
      <p><b>Duration:</b>  {{$song->duration}}</p>
      <p><b>Release date:</b>  {{$song->year}}</p>
    </tbody>
  </table>
@endsection

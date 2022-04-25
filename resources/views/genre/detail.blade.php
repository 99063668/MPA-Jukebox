@extends('layouts.app')

@section('content')
<a href="{{ route('song.show', 1) }}">Back</a>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Year</th>
        <th scope="col">Album</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($details as $detail)
        <tr>
          <td>{{$detail->year}}</td>
          <td>{{$detail->album}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection

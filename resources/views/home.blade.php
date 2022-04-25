@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Genre</h1>
                    <a href="{{ route('song.show', 1) }}">Hiphop</a>
                    <a href="{{ route('song.show', 2) }}">Rap</a>
                    <a href="{{ route('song.show', 3) }}">Edm</a>
                    <a href="{{ route('song.show', 4) }}">Dance</a>
                    <a href="{{ route('song.show', 5) }}">Rock</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

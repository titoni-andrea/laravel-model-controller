@extends('layouts.app')

@section('content')
    <h1>Lista film</h1>
    <ul>
        @foreach ($movie as $index => $film)
            <li>ogni riga corrisponde ad un film, il {{$index + 1}}° è {{$film->title}}</li>
        @endforeach
    </ul>
@endsection

@extends('layouts.main-layout')

@section('content')
    
    <h1>Film per Genere</h1>
    <a href="{{route('movie.create')}}">Crea un Nuovo Film</a>
    
    {{-- stampati a schermo i film usando i generi  --}}
    @foreach ($genres as $genre)
        <h2>Genere: {{ $genre -> name }}</h2>
        <ul>
            @foreach ($genre -> movies as $movie)
                @include('components.movie.list-item')
            @endforeach
        </ul>
    @endforeach

@endsection
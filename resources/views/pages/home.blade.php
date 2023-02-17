@extends('layouts.main-layout')

@section('content')
    
    <h1>Film</h1>
    <a href="{{route('movie.create')}}">Crea un Nuovo Film</a>
    
    {{-- stampati a schermo i film usando i generi  --}}
    @foreach ($genres as $genre)
        <h2>Genere: {{ $genre -> name }}</h2>
        <ul>
            @foreach ($genre -> movies as $movie)
                <li>
                    Nome Film: {{ $movie -> name }} 
                    <br>
                    Anno: {{ $movie -> year }}
                    Cashout: {{ $movie -> cashOut ? "YES" : "NO" }}
                    <ul>Tags:
                        @foreach ($movie->tags as $tag)
                        <li>{{$tag-> name}}</li>                            
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    @endforeach

@endsection
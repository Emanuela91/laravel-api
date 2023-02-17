@extends('layouts.main-layout')

@section('content')
    
    <h1>Film</h1>
    
    {{-- stampati a schermo i film usando i generi  --}}
    @foreach ($genres as $genre)
        <h2>Genere: {{ $genre -> name }}</h2>
        <ul>
            @foreach ($genre -> movies as $movie)
                <li>
                    Nome Film:{{ $movie -> name }} 
                    <br>
                    Anno:{{ $movie -> year }}
                    Cashout:{{ $movie -> cashOut ? "YES" : "NO" }}
                </li>
            @endforeach
        </ul>
    @endforeach

@endsection
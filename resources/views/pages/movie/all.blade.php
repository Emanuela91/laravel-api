@extends('layouts.main-layout')

@section('content')
    <h1>Film</h1>
    
    {{-- stampati a schermo i film --}}
    <ul>
        @foreach ($movies as $movie)
            <li>
                Nome Film:{{ $movie -> name }} 
                <br>
                Anno:{{ $movie -> year }}
                Cashout:{{ $movie -> cashOut ? "YES" : "NO" }}
            </li>
        @endforeach
    </ul>  
@endsection
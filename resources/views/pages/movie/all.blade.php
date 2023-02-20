@extends('layouts.main-layout')

@section('content')
    <h1>Film</h1>
    <a href="{{route('movie.create')}}">Crea un Nuovo Film</a>
    {{-- stampati a schermo i film --}}
    <ul>
        @foreach ($movies as $movie)
          @include('components.movie.list-item')  
        @endforeach
    </ul>  
@endsection
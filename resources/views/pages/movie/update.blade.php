@extends('layouts.main-layout')


 @section('content')
 <h1>Aggiorna Film</h1>
 
 <form method="POST" action="{{route('movie.update', $movie)}}">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name" value="{{$movie->name}}">
    <br>
    <label for="year">Anno</label>
    <input type="number" name="year" value="{{$movie->year}}">
    <br>
    <label for="cashOut">Cash Out</label>
    <select name="cashOut" id="" value="{{$movie->cashOut}}">       
           <option value="1">yes</option>
           <option value="0">no</option>
    </select>
    <br>
    <label for="genre_id">Genere</label>
    <select name="genre_id" id="">
        @foreach ($genres as $genre)
        <option value="{{$genre->id}}"
            @selected($movie -> genre -> id == $genre-> id)>
            {{$genre->name}}
        </option>            
        @endforeach
    </select>
    <br>
    <label>Tag</label>
    <br>
    @foreach ($tags as $tag)
        <input type="checkbox" name="tags_id[]" value="{{$tag->id}}" id="{{$tag->id}}"
            @foreach ($movie -> tags as $movieTag)
                @checked($movieTag -> id == $tag ->id)
            @endforeach
        >
        <label for="{{$tag->id}}">{{$tag->name}}</label>
        <br>
    @endforeach
    <input type="submit" value="Aggiorna Film">
 </form>
 @endsection
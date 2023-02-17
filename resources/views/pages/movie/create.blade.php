@extends('layouts.main-layout')


 @section('content')
 <h1>Crea Nuovo Film</h1>
 
 <form method="POST" action="{{route('movie.store')}}">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name">
    <br>
    <label for="year">Anno</label>
    <input type="number" name="year">
    <br>
    <label for="cashOut">Cash Out</label>
    <select name="cashOut" id="">       
           <option value="1">yes</option>
           <option value="0">no</option>
    </select>
    <br>
    <label for="genre_id">Genere</label>
    <select name="genre_id" id="">
        @foreach ($genres as $genre)
        <option value="{{$genre->id}}">
            {{$genre->name}}
        </option>            
        @endforeach
    </select>
    <br>
    <input type="submit" value="Crea Film">
 </form>


 @endsection
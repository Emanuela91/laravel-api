<li>
    Nome Film: {{ $movie -> name }} 
    <a href="{{route('movie.edit', $movie)}}">Aggiorna</a>
    <a href="">Cancella</a>
    <br>
    Anno: {{ $movie -> year }}
    Cashout: {{ $movie -> cashOut ? "YES" : "NO" }}
    <ul>Tags:
        @foreach ($movie->tags as $tag)
        <li>{{$tag-> name}}</li>                            
        @endforeach
    </ul>
</li>
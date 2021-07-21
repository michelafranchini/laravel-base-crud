@extends('layout.main_layout')

@section('content')
    
    <div class="comic_container">
        @foreach ($comics as $comic)
        <div class="comic">
            <h3>{{$comic->title}}</h3>
            <img src="{{$comic->thumb}}" alt="">
            {{-- <p>{{$comic->description}}</p>   --}}
            <a href="{{route('comics.show', $comic->id)}}">Show</a>  
            <a href="{{route('comics.show', $comic->id)}}">Edit</a>
            <a href="{{route('comics.show', $comic->id)}}">Delete</a>
        </div>
        @endforeach

        
    </div>
    
    {{$comics->links()}}
@endsection

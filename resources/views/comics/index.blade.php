@extends('layout.main_layout')

@section('content')
    
    <div>
        @foreach ($comics as $comic)
        <h2>{{$comic->title}}</h2>
        <img src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>  
        <a href="{{route('comics.show', $comic->id)}}">View more</a>  
        @endforeach

        {{$comics->links()}}
        
    </div>

@endsection

@extends('layout.main_layout')

@section('content')
    
    <div>
        @foreach ($comics as $item)
        <h2>{{$item->title}}</h2>
        <img src="{{$item->thumb}}" alt="">
        <p>{{$item->description}}</p>    
        @endforeach
    </div>

@endsection

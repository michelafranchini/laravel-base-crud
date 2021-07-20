@extends('layout.main_layout')

@section('content')
    
<div>
    
    <div>
        <h2>{{$comic->title}}</h2>
        <img src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>  
        <h3>{{$comic->price}}</h3>  
        <h3>{{$comic->sale_date}}</h3>
        <h3>{{$comic->series}}</h3>
    </div>
  
</div>
@endsection
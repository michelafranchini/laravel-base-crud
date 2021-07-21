@extends('layout.main_layout')

@section('content')
    <h1>Modifica un fumetto!</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" {{$comic->series}}>
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia" {{$comic->type}}>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" {{$comic->price}}>
        </div>
        <div class="form-group">
            <label for="sale_date">Data d'uscita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci il titolo" {{$comic->sale_date}}>
        </div>
        <div class="form-group">
            <label for="thumb">URL Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine" {{$comic->thumb}}>
        </div>
        <div class="form-group">
            <label for="title">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Inserisci la descrizione" {{$comic->description}}></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
@endsection
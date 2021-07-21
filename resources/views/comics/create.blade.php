@extends('layout.main_layout')

@section('content')
<h1>Aggiungi un fumetto!</h1>
<form action="{{route('comics.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
    </div>
    <div class="form-group">
        <label for="type">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci la tipologia">
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
    </div>
    <div class="form-group">
        <label for="sale_date">Data d'uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci il titolo">
    </div>
    <div class="form-group">
        <label for="thumb">URL Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'url dell'immagine">
    </div>
    <div class="form-group">
        <label for="title">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Inserisci la descrizione"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>
@endsection
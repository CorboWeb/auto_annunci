@extends('layouts.template')
@section('content')

<div class="mx-auto my-4 card col-8 text-center">
    <div class="card-header">
        <h5 class="card-title p-1">ID Annuncio: {{ $annuncio->id }}</h5>

    </div>
    <div class="card-body">
      <p class="card-title m-2"><b class="text-capitalize">Titolo: </b>{{ $annuncio->titolo }}</p>
      <p class="card-text"><b class="text-capitalize">Stato: </b>{{$annuncio->stato }}</p>
      <p class="card-text"><b class="text-capitalize">Prezzo: </b>{{$annuncio->prezzo }}</p>
      <p class="card-text"><b class="text-capitalize">chilometraggio: </b>{{$annuncio->chilometraggio }}</p>
      <p class="card-text"><b class="text-capitalize">immatricolazione: </b>{{$annuncio->immatricolazione }}</p>
      <p class="card-text"><b class="text-capitalize">cilindrata: </b>{{$annuncio->cilindrata }}</p>
      <p class="card-text"><b class="text-capitalize">colore: </b>{{$annuncio->colore }}</p>
      <p class="card-text"><b class="text-capitalize">alimentazione: </b>{{$annuncio->alimentazione }}</p>
      <p class="card-text"><b class="text-capitalize">carrozzeria: </b>{{$annuncio->carrozzeria }}</p>
      <p class="card-text"><b class="text-capitalize">indirizzo: </b>{{$annuncio->indirizzo }}</p>
      <p class="card-text"><b class="text-capitalize">colore: </b>{{$annuncio->colore }}</p>
      <p class="card-text"><b>Descrizione:</b>{!! $annuncio->descrizione !!}</p>
      <a href="/annunci" class="btn btn-primary">Visuallizza altri annunci</a>


    </div>

  </div>

@endsection
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
      <p class="card-text"><b class="text-capitalize">Proprietari: </b>{{$annuncio->dettaglio->proprietari }}</p>
      <p class="card-text"><b class="text-capitalize">Cambio: </b>{{$annuncio->dettaglio->cambio }}</p>
      <p class="card-text"><b class="text-capitalize">Vernice: </b>{{$annuncio->dettaglio->vernice }}</p>
      <p class="card-text"><b class="text-capitalize">Rivestimenti: </b>{{$annuncio->dettaglio->rivestimenti }}</p>
      <p class="card-text"><b class="text-capitalize">Posti: </b>{{$annuncio->dettaglio->posti }}</p>
      <p class="card-text"><b class="text-capitalize">Porte: </b>{{$annuncio->dettaglio->porte }}</p>
      <p class="card-text"><b class="text-capitalize">Consumi: </b>{{$annuncio->dettaglio->consumi }}</p>
      <p class="card-text"><b class="text-capitalize">Emissioni: </b>{{$annuncio->dettaglio->emissioni }}</p>
      <p class="card-text"><b class="text-capitalize">Equipaggiamento: </b>{!! $annuncio->dettaglio->equipaggiamento !!}</p>

      
      <p class="card-text"><b>Inserito Da:</b>{{$annuncio->user->name}}</p>

      <form method="post"  action="{{ route('recensioni.store', $annuncio->user_id )}}">
      
        @csrf
        <div class="mt-2 col-12 p-2 px-5">
            <label for="valutazione" class="form-label">Inserisci le tua recensione sull'utente</label>
            <input type="number" class="form-control col-10" min="0" max="5" name="valutazione" id="valutazione" required>
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Invia </button>
        </div>
      
      
      </form>
      <a href="/annunci" class="btn btn-primary mt-2">Visuallizza altri annunci</a>


    </div>

  </div>

@endsection
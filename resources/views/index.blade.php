@extends('layouts.template')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">Annunci Auto!</h1>
    <p class="lead">Questa è una semplice app di esempio costruita con Laravel 8</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
   @guest
   <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registrati</a>
  </p>
   @endguest
  </div>
  @auth
  <h2>Ciao {{ Auth::user()->name }}</h2>

  @endauth

  <div class="container col-12 float-start w-100 mb-3">
    @foreach ($annunci as $annuncio)
        <div class="card m-2" style="width:45%; float:left;">
            <div class="card-body">
                <h5 class="card-title"><a class="annuncio_titolo" href="{{ route('annunci.show', $annuncio->id) }}"> {{ $annuncio->titolo }}</a></h5>
                <h6>Modello: {{ $annuncio->modello->nome }} <br> Marca: {{ $annuncio->modello->marca->nome }} <br> {{ $annuncio->prezzo }} €</h6>
                <div style="margin: 10px 0; display:block;">
                    @if ($annuncio->immagini!=null)
                    @foreach ($annuncio->immagini as $immagine)
                    <img style="max-height:100px; margin:10px 0; " src="/storage/immagini/{{$immagine->immagine}}">

                    @endforeach
                    @endif
                </div>

                <h6 class="card-subtitle mb-2 text-muted">Inserito da {{ $annuncio->user->name }}</h6>
            </div>
        </div>
    @endforeach

</div>
<div class="container float-start col-12 w-100">
    <div>{{$annunci->links()}}</div>
</div>

@endsection

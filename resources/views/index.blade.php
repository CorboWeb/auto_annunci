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


@endsection

@extends('layouts.template')
@section('content')
<div class="container m-5">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="m-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('immagini.store', $id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-around flex-wrap col-8">

        <div class="m-3 col-11">
            <h1>Inserisci Dettagli</h1>
        </div>

    <div class="col-11 m-3">
        <label for="immagine" class="form-label">Inserisci immagine</label>
        <input class="form-control" type="file" id="immagine" name="immagine">
    </div>

      




    <div class="col-11 m-3">
        <input type="submit" name="Invia" class="btn btn-primary mr-2"/><a href="{{ route('annunci.show', $id) }}" class="btn btn-primary">Visualizza Annuncio</a>
    </div>

</div>

</div>

</form>

@if ($immagini!=null)
        <div class="container">
            <h3 class="w-100 text-center mb-3">Immagini già inserite</h3>
            <ul class="d-flex justify-content-evenly flex-wrap">
                @foreach ($immagini as $immagine)
                    <li class="list-group-item text-center mb-2">
                    <div>
                    <img class="mb-2" style="max-width:250px;" src="/storage/immagini/{{$immagine->immagine}}"><br>
                    <a href="{{ route('immagini.destroy', $immagine->immagine) }}" class="btn btn-primary">Elimina Immagine</a>
                </li>

                @endforeach
            </ul>
        </div>
    @endif


@endsection
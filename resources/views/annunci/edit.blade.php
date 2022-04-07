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

<form action="{{ route('annunci.update',$annuncio->id) }}" method="post">
        @csrf
    <div class="d-flex justify-content-around flex-wrap col-8">

        <div class="m-3 col-11">
            <h1>Modifica un articolo</h1>
        </div>

    <div class="col-11 m-3">
        <label for="titolo" class="form-label">Titolo</label><br>
        <input type="text" id="titolo" name="titolo" class="form-control" value="{{$annuncio->titolo}}" />
    </div>


    <div class="col-5 m-3">
        <label for="stato" class="form-label">Stato</label><br>
        <input type="text" id="stato" name="stato" class="form-control" value="{{$annuncio->stato}}" />
    </div>


    <div class="col-5 m-3">
        <label for="prezzo" class="form-label">Prezzo</label><br>
        <input type="number" id="prezzo" name="prezzo" class="form-control" value="{{$annuncio->prezzo}}" />
    </div>

    <div class="col-5 m-3">
        <label for="chilometraggio" class="form-label">Chilometraggio</label><br>
        <input type="text" id="chilometraggio" name="chilometraggio" class="form-control" value="{{$annuncio->chilometraggio}}" />
    </div>

    <div class="col-5 m-3">
        <label for="immatricolazione" class="form-label">Immatricolazione</label><br>
        <input type="date" id="immatricolazione" name="immatricolazione" class="form-control" value="{{$annuncio->immatricolazione}}" />
    </div>

    <div class="col-5 m-3">
        <label for="potenza" class="form-label">Potenza</label><br>
        <input type="number" id="potenza" name="potenza" class="form-control" value="{{$annuncio->potenza}}" />
    </div>

    <div class="col-5 m-3">
        <label for="cilindrata" class="form-label">Cilindrata</label><br>
        <input type="number" id="cilindrata" name="cilindrata" class="form-control"  value="{{$annuncio->cilindrata}}" />
    </div>

    <div class="col-5 m-3">
        <label for="colore" class="form-label">Colore</label><br>
        <input type="text" id="colore" name="colore" class="form-control"  value="{{$annuncio->colore}}" />
    </div>

    <div class="col-5 m-3">
        <label for="alimentazione" class="form-label">Alimentazione</label><br>
        <input type="text" id="alimentazione" name="alimentazione" class="form-control" value="{{$annuncio->alimentazione}}" />
    </div>

    <div class="col-5 m-3">
        <label for="carrozzeria" class="form-label">Carrozzeria</label><br>
        <input type="text" id="carrozzeria" name="carrozzeria" class="form-control"  value="{{$annuncio->carrozzeria}}" />
    </div>

    <div class="col-5 m-3">
        <label for="indirizzo" class="form-label">Indirizzo</label><br>
        <input type="text" id="indirizzo" name="indirizzo" class="form-control"  value="{{$annuncio->indirizzo}}" />
    </div>

    <div class="col-5 m-3">
        <label for="comune" class="form-label" >Comune</label><br>
        <select class="form-select" id="comune" name="comune" aria-label="Default select example" >
            <option selected>Scegli il comune</option>
            @foreach ($comuni as $comune)
            @if ($comune->id===$annuncio->comune_id)
                <option value="{{$comune->id}}" selected>{{$comune->comune}} ({{$comune->provincia}}), {{$comune->regione}}</option>
            @else
                <option value="{{$comune->id}}">{{$comune->comune}} ({{$comune->provincia}}), {{$comune->regione}}</option>
            @endif 
        @endforeach
        </select>
    </div>

    <div class="col-5 m-3">
        <label for="comune" class="form-label" >Modello</label><br>
        <select class="form-select" id="comune" name="modello" aria-label="Default select example">
            <option selected>Scegli la marca</option>
            @foreach ($marche as $marca)
            <optgroup label="{{$marca->nome}}">
                @foreach ($modelli as $modello)
                    @if($modello->marca_id===$marca->id)
                        @if ($modello->id===$annuncio->modello_id)
                            <option value="{{$modello->id}}" selected>{{$modello->nome}}</option>
                        @else
                            <option value="{{$modello->id}}">{{$modello->nome}}</option>
                        @endif 
                    @endif
                @endforeach
            </optgroup>
        @endforeach
        </select>
    </div>

    <div class="col-11 m-3">
        <label for="descrizione" class="form-label">Descrizione</label><br>
        <textarea class="form-control" id="descrizione" name="descrizione">{{$annuncio->descrizione}}</textarea><br />
    </div>

    <div class="col-11 m-3">
        <input type="submit" name="Invia" class="btn btn-primary"/>
    </div>

</div>

</div>

</form>
@endsection

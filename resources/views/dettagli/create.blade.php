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


<form action="{{ route('dettagli.store', $id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-around flex-wrap col-8">

        <div class="m-3 col-11">
            <h1>Inserisci Dettagli</h1>
        </div>

    <div class="col-5 m-3">
        <label for="proprietari" class="form-label">Numero Proprietari</label><br>
        <input type="number" id="proprietari" name="proprietari" class="form-control"/>
    </div>


    <div class="col-5 m-3">
        <label for="cambio" class="form-label">Cambio</label><br>
        <input type="text" id="cambio" name="cambio" class="form-control"/>
    </div>


    <div class="col-5 m-3">
        <label for="vernice" class="form-label">Vernice</label><br>
        <input type="text" id="vernice" name="vernice" class="form-control"/>
    </div>

    <div class="col-5 m-3">
        <label for="rivestimenti" class="form-label">Rivestimenti</label><br>
        <input type="text" id="rivestimenti" name="rivestimenti" class="form-control"/>
    </div>

    <div class="col-5 m-3">
        <label for="posti" class="form-label">Posti</label><br>
        <input type="number" id="posti" name="posti" class="form-control"/>
    </div>

    <div class="col-5 m-3">
        <label for="porte" class="form-label">Porte</label><br>
        <input type="number" id="porte" name="porte" class="form-control"/>
    </div>

    <div class="col-5 m-3">
        <label for="consumi" class="form-label">Consumi</label><br>
        <input type="text" id="consumi" name="consumi" class="form-control"/>
    </div>

    <div class="col-5 m-3">
        <label for="emissioni" class="form-label">Emissioni</label><br>
        <input type="text" id="emissioni" name="emissioni" class="form-control"/>
    </div>

    <div class="col-11 m-3">
        <label for="equipaggiamento" class="form-label">Equipaggiamento</label><br>
        <textarea class="form-control" id="equipaggiamento" name="equipaggiamento"></textarea><br />
    </div>

    <div class="col-11 m-3">
        <input type="submit" name="Invia" class="btn btn-primary"/>
    </div>

</div>

</div>

</form>
@endsection

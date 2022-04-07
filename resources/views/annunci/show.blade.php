@extends('layouts.template')


@section('content')
    <h1>Users:</h1>


    {{$user->id}} -- {{$user->titolo}}  -- {{$user->descrizione}}<br>

@endsection
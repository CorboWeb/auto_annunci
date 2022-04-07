@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful annunci panel.</p>
    <table class="table table-bordered table-striped datat"> 
    <thead>
        <th></th>
        <th>Descrizione</th>
    </thead>
    <tbody>
        @foreach ($annunci as $annuncio)
            <tr>
                
                <td>{{$annuncio->titolo}}</td>
                <td>{!! $annuncio->descrizione !!}</td>            
            
            </tr>
        @endforeach


    </tbody>
</table>
@stop

@section('js')
    <script>
        $(document).ready( function () {
    $('.datat').DataTable();
} );
    </script>
@stop

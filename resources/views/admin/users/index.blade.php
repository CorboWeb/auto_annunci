@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful users panel.</p>
    <table class="table table-bordered table-striped datat"> 
    <thead>
        <th>Nome</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            
            
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

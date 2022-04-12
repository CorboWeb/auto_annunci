@extends('layouts.template')
@section('content')


    <style>

        a {
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }

        a:hover {
            color: #000;


        }

    </style>
</head>

<body>
    @if (Session::has('msg'))
    <div class="alert alert-success mt-5" role="alert">
        {{Session::get('msg')}}
    </div>
@endif

    <div class="container">
        <h1 class="py-3">Lista Annunci</h1>
        <table class="table table-bordered table-striped table-hover">
            <tr> 
                <th>Registrato il:</th>
                <th>Titolo</th>
                <th colspan="2">Azioni</th>
            </tr>
            @foreach ($annunci as $annuncio)
                <tr>
                     <td class="py-3">{{ \Carbon\Carbon::parse($annuncio->created_at)->format('d/m/y
                     H:i') }}</td>
                    <td class="py-3"><a class="py-4" href="{{ route('annunci.show', $annuncio->id) }}">{{ $annuncio->titolo }}</a></td>
                    <td class="py-3"><a class="py-4" href="{{ route('annunci.edit', $annuncio->id) }}">Modifica</a></td>
                    <td class="py-3"><a class="py-4" href="{{ route('annunci.destroy', $annuncio->id) }}">Elimina</a></td>
                </tr>
            @endforeach
        </table>
        
        <a href="{{ route('annunci.create') }}" class="btn btn-primary">Crea Annunci</a>
    </div>


@endsection


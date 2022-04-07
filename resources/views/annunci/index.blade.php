<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>


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
                    <td class="py-3"><a class="py-4" href="{{ route('annunci.delete', $annuncio->id) }}">Elimina</a></td>
                </tr>
            @endforeach
        </table>
        {{ $annunci->links() }}
        <a href="{{ route('annunci.create') }}" class="btn btn-primary">Crea Annunci</a>
    </div>
</body>

</html>

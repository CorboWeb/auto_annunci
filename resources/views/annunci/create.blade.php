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
</head>

<body>
    <form method="post" action="{{ route('annunci.store') }}">
        <div class="container">
            <h1>Crea Annunci</h1>
            <div class="row">


                @csrf
                <div class="col-4">
                    Titolo
                </div>
                <div class="col-4">
                    <input type="text" name="titolo" class="form-control @error('titolo') is-invalid @enderror" />
                    @error('titolo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class="row">


                @csrf
                <div class="col-4">
                    Descrizione 
                </div>
                <div class="col-4">
                    <input type="text" name="descrizione" class="form-control @error('descrizione') is-invalid @enderror" />
                    @error('descrizione')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class="row">


                @csrf
                <div class="col-4">
                    Prezzo
                </div>
                <div class="col-4">
                    <input type="number" name="prezzo" class="form-control @error('prezzo') is-invalid @enderror" />
                    @error('prezzo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>






            <div class="row">


                @csrf
                <div class="col-4">
                    Immagine 
                </div>
                <div class="col-4">
                    <input type="text" name="immagine" class="form-control @error('immagine') is-invalid @enderror" />
                    @error('immagine')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>



            
            <div class="row">


                @csrf
                <div class="col-4">
                    Scegli L'autore
                </div>
                <div class="col-4">


                    <select name="user_id" id="">
                        @foreach ($users as $user_dati)

                        <option value="{{$user_dati->id}}">{{$user_dati->name}}</option>

                        @endforeach
                    </select>


                </div>
                
            </div>



<br>


            <div class="col-4">
                <input type="submit" value="crea" class="btn btn-primary" />

            </div>
        </div>
        </div>
    </form>
</body>

</html>

<?php

namespace App\Http\Controllers;

use App\Models\dettaglio;
use App\Models\immagine;
use App\Models\Recensione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImmaginiController extends Controller
{
  
    public function create($id)
    {

        $immagini = immagine::where('annuncio_id',$id)->get();

        return view('immagini.create', ['id' => $id, 'immagini' => $immagini]);
    }

    
    public function store(Request $request, $id)
    {

    
        $validated = $request->validate([
            'immagine' => 'required',


        ]);


        $path=$request->file('immagine')->store('public/immagini');
        $nome_file=explode('/', $path);
        $immagine = new Immagine;


        $immagine->immagine = $nome_file[2];
        $immagine->annuncio_id = $id;


        $immagine->save();

        return redirect()->route('immagini.create', $id)->with('msg', 'Articolo correttamente inserito!');
    }



    public function destroy($immagine)
    {


        Storage::delete('public/immagini/'.$immagine);
        $imm = Immagine::where('immagine', $immagine)->get();
        
        foreach ($imm as $img) {
            $id = $img->annuncio_id;
            $img->delete();

        }

        return redirect()->route('immagini.create', $id)->with('msg', 'Immagine eliminata!');
    }

}

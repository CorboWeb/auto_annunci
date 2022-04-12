<?php

namespace App\Http\Controllers;

use App\Models\dettaglio;
use App\Models\Recensione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ImmaginiController extends Controller
{
  
    public function create($id)
    {


        return view('immagini.create', ['id' => $id]);
    }

    
    public function store(Request $request, $id)
    {

    
        $validated = $request->validate([
            'proprietari' => 'required',
            'cambio' => 'required',
            'vernice' => 'required',
            'rivestimenti' => 'required',
            'posti' => 'required',
            'porte' => 'required',
            'emissioni' => 'required',
            'equipaggiamento' => 'required',


        ]);

        $dettaglio = new Dettaglio;
        $dettaglio-> id = $id;
        $dettaglio->proprietari = $request->proprietari;
        $dettaglio->cambio = $request->cambio;
        $dettaglio->vernice = $request->vernice;
        $dettaglio->rivestimenti = $request->rivestimenti;
        $dettaglio->posti = $request->posti;
        $dettaglio->porte = $request->porte;
        $dettaglio->emissioni = $request->emissioni;
        $dettaglio->equipaggiamento = $request->equipaggiamento;   

        $dettaglio->save();

        return view('immagini.create')->with('msg', 'Articolo correttamente inserito!');
    }

}

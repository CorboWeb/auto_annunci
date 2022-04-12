<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Recensione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecensioniController extends Controller
{
    public function store(Request $request, $user_id) {


        if ($user_id!=Auth::id()) {
        $recensione = new Recensione();

        $recensione->valutazione = $request->valutazione;
        $recensione->user_id = $user_id;


        $recensione->save();

        return redirect()->route('annunci.index')->with('msg', 'Utente Recensito Correttamente!');
    } 
        else {
            return redirect()->route('annunci.index')->with('msg', 'Non Puoi Recensirti Da Solo');

        }
    }
}

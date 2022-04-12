<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\annuncio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AnnunciController extends Controller
{
  
    public function index()
    {
        $annunci = User::find(Auth::id())->annunci;
        return view('annunci.index', ['annunci' => $annunci]);
    }

  
    public function create()
    {
        $comuni = DB::select('select * from comuni');
        $marche = DB::select('select * from marche');
        $modelli = DB::select('select * from modelli');

        return view('annunci.create', ['comuni' => $comuni, 'marche' => $marche, 'modelli' => $modelli]);
    }

    
    public function store(Request $request)
    {


        $validated = $request->validate([
            'stato' => 'required|max:255',
            'titolo' => 'required|max:255',
            'prezzo' => 'required',
            'chilometraggio' => 'required',
            'immatricolazione' => 'required',
            'potenza' => 'required',
            'cilindrata' => 'required|max:255',
            'colore' => 'required|max:255',
            'alimentazione' => 'required|max:255',
            'carrozzeria' => 'required|max:255',
            'descrizione' => 'required',
            'indirizzo' => 'required|max:255',
            'modello' => 'required',
            'comune' => 'required',




        ]);

        /*if (!is_null($request->file('immagine'))) {
            $path = $request->file('immagine')->store('public/immagini');
            $nome = explode("/", $path);
        } else $nome[2] = '';*/
        $annuncio = new Annuncio;
        $annuncio->stato = $request->stato;
        $annuncio->titolo = $request->titolo;
        $annuncio->prezzo = $request->prezzo;
        $annuncio->chilometraggio = $request->chilometraggio;
        $annuncio->immatricolazione = $request->immatricolazione;
        $annuncio->potenza = $request->potenza;
        $annuncio->cilindrata = $request->cilindrata;
        $annuncio->colore = $request->colore;
        $annuncio->alimentazione = $request->alimentazione;
        $annuncio->carrozzeria = $request->carrozzeria;
        $annuncio->descrizione = $request->descrizione;
        $annuncio->indirizzo = $request->indirizzo;

        $annuncio->user_id = Auth::id();
        $annuncio->modello_id = $request->modello;
        $annuncio->comune_id = $request->comune;

        /*$annuncio->immagine = $nome[2];*/
        $annuncio->save();

        return view('dettagli.create', ['id' => $annuncio->id])->with('msg', 'Articolo correttamente inserito!');
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $annuncio = Annuncio::findOrFail($id);
        return view('annunci.show', compact('annuncio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $comuni = DB::select('select * from comuni');
        $marche = DB::select('select * from marche');
        $modelli = DB::select('select * from modelli');
        $annuncio = Annuncio::find($id);
        return view('annunci.edit', compact('annuncio'), ['comuni' => $comuni, 'marche' => $marche, 'modelli' => $modelli]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $annuncio = Annuncio::find($id);

        $annuncio->stato = $request->stato;
        $annuncio->titolo = $request->titolo;
        $annuncio->prezzo = $request->prezzo;
        $annuncio->chilometraggio = $request->chilometraggio;
        $annuncio->immatricolazione = $request->immatricolazione;
        $annuncio->potenza = $request->potenza;
        $annuncio->cilindrata = $request->cilindrata;
        $annuncio->colore = $request->colore;
        $annuncio->alimentazione = $request->alimentazione;
        $annuncio->carrozzeria = $request->carrozzeria;
        $annuncio->descrizione = $request->descrizione;
        $annuncio->indirizzo = $request->indirizzo;

        $annuncio->user_id = Auth::id();
        $annuncio->modello_id = $request->modello;
        $annuncio->comune_id = $request->comune;

        $annuncio->save();
        return redirect()->route('annunci.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $annuncio = Annuncio::find($id);
        if(Auth::id()==$annuncio->user->id){
        /*if (Storage::exists('public/immagini/' . $annuncio->immagine)) {
            Storage::delete('public/immagini/' . $annuncio->immagine);
        }*/

        $annuncio->delete();

        return redirect()->route('annunci.index')->with('msg', 'Articolo eliminato!');
    }
    return "Non hai i permessi!";
    }
}

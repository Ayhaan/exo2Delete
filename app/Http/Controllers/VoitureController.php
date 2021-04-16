<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function index(){
        $voitures = Voiture::all();
        $moins = Voiture::where('prix', '<', 4000)->get();
        $plus = Voiture::where('prix', '>', 4000)->get();
        $reductions = Voiture::where('reduction', '!=', null)->get();
        return view('admin.voiture', compact('voitures', 'moins', 'plus', 'reductions'));
    }
    public function create(){
        return view('admin.createVoiture');
    }
    public function store(Request $request){
        $store = new Voiture();
        $store->marque = $request->marque;
        $store->annee = $request->annee;
        $store->couleur = $request->couleur;
        $store->prix = $request->prix;
        $store->reduction = $request->reduction;
        $store->save();
        return redirect()->route('voitures.index');
    }
    public function destroy(Voiture $id) {
        // dd($id);
        $id->delete();
        return redirect()->back();
    }
} 

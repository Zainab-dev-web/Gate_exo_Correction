<?php

namespace App\Http\Controllers;
use App\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        $produits = Produit::all();
        return view('tab_produit', compact('produits'));
    }

    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $image = Storage::disk('public')->put('', $request->file('photo'));
        $produit = new Produit();
        $produit->name = $request->input('name');
        $produit->prix = $request->input('prix');
        $produit->photo = $image;
        $produit->user_id = Auth::id();
        $produit->save();
        return redirect()->route('tab_produit');
    }
}

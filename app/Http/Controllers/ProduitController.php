<?php

namespace App\Http\Controllers;
use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        return view('tab_produit');
    }

    public function create(){
        return  view('ajout_produit');
    }
}

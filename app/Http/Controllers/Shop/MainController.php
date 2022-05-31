<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {

        $produits = Produit::all();

        return view('Shop.index', compact('produits'));
    }

    public function produit(Request $request) {

        $un_produit = Produit::find($request->id);

        return view('Shop.produit', compact('un_produit'));
    }

}

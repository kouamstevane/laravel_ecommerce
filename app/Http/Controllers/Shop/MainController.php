<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {
        // {{ dd('je suis index gar'); }}
        $produits = Produit::OrderBy('nom', 'asc')->paginate(8);

            // {{ dd($produits); }}
        return view('Shop.index', compact('produits'));
    }

            //recherche d'un produit
    public function produit(Request $request) {

        $un_produit = Produit::find($request->id);
        $produits = Produit::OrderBy('nom', 'asc')->paginate(8);

        return view('Shop.produit', compact('un_produit', 'produits'));
    }


        //avoir plus d'information sur un smarthphone
        public function smarthPhone(Request $request) {

            $un_produit = Phone::find($request->id);
            $produits = Produit::OrderBy('nom', 'asc')->paginate(8);
            // {{ dd($un_produit);}}

            return view('Shop.produit', compact('un_produit', 'produits'));
        }



    public function showSmarthPhone() {

        // echo 'je suis le smarthPhone';
        $smarthPhones= Phone::OrderBy('nom', 'asc')->paginate(8);
        return view('Shop.smarthPhone', compact('smarthPhones'));
    }

}

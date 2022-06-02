<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Laptop;
use App\Models\Phone;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index() {

        $produits = Produit::OrderBy('nom', 'asc')->paginate(8);
        return view('Shop.index', compact('produits'));
    }

    public function showSmarthPhone() {

        // echo 'je suis le smarthPhone';
        $smarthPhones= Phone::OrderBy('nom', 'asc')->paginate(8);
        return view('Shop.smarthPhone', compact('smarthPhones'));
    }

    public function showLaptop() {

        // echo 'je suis le smarthPhone';
        // {{ dd('Je suis Laptop'); }}
        $laptops= Laptop::OrderBy('nom', 'asc')->paginate(8);
        return view('Shop.laptop', compact('laptops'));
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

            return view('Shop.produit', compact('un_produit', 'produits'));
        }

        public function laptop(Request $request) {

            $un_produit = Laptop::find($request->id);
            $produits = Produit::OrderBy('nom', 'asc')->paginate(8);

            return view('Shop.produit', compact('un_produit', 'produits'));
        }

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            "nom"=> "Smarthphone Alcatel",
            "prix_ht"=>195000,
            "description"=>"SmarthPhone Alcatel",
            "photo_principale"=>"phone.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Televiseur HD Full Option",
            "prix_ht"=>255000,
            "description"=>"Televiseur HD Full Option",
            "photo_principale"=>"tele.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Laptops",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"laptop.png"
        ]);

        DB::table('produits')->insert([
            "nom"=> "Electromenagers",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"electromenager.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"ecouteur.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Laptop",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"laptop.png"
        ]);

        DB::table('produits')->insert([
            "nom"=> "Electromenagers",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"electromenager.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"ecouteur.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Laptop",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"laptop.png"
        ]);

    }
}

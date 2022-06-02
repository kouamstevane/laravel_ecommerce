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
            "photo_principale"=>"autre1.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Televiseur HD Full Option",
            "prix_ht"=>255000,
            "description"=>"Televiseur HD Full Option",
            "photo_principale"=>"autre2.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Laptops",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"autre3.png"
        ]);

        DB::table('produits')->insert([
            "nom"=> "Electromenagers",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"autre4.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"autre5.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"ecouteur.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect1.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect2.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect3.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect4.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect5.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"elect6.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop1.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop2.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop2.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop3.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop4.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop5.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop6.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone1.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone2.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone3.png"
        ]);

        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone4.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone5.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone6.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone7.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"tv1.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"tv2.png"
        ]);


        DB::table('produits')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"tv3.png"
        ]);
    }
}

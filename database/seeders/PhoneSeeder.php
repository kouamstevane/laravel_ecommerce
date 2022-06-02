<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Phones')->insert([
            "nom"=> "Smarthphone Alcatel",
            "prix_ht"=>195000,
            "description"=>"SmarthPhone Alcatel",
            "photo_principale"=>"phone1.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=>"Televiseur HD Full Option",
            "prix_ht"=>255000,
            "description"=>"Televiseur HD Full Option",
            "photo_principale"=>"phone2.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=>"Laptops",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"phone3.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=> "Electromenagers",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"phone4.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone5.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone6.png"
        ]);

        DB::table('Phones')->insert([
            "nom"=>"Ecouteurs",
            "prix_ht"=>4500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone7.png"
        ]);

    }
}

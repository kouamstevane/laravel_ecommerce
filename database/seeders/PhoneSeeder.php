<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class phoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            "nom"=> "Smarthphone Alcatel",
            "prix_ht"=>195000,
            "description"=>"SmarthPhone Alcatel",
            "photo_principale"=>"phone1.png"
        ]);

        DB::table('phones')->insert([
            "nom"=>"Televiseur HD Full Option",
            "prix_ht"=>255000,
            "description"=>"Televiseur HD Full Option",
            "photo_principale"=>"phone2.png"
        ]);

        DB::table('phones')->insert([
            "nom"=>"Itel p33",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"phone3.png"
        ]);

        DB::table('phones')->insert([
            "nom"=> "Techno k7",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"phone4.png"
        ]);

        DB::table('phones')->insert([
            "nom"=>"Samsung s10",
            "prix_ht"=>3414500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone5.png"
        ]);

        DB::table('phones')->insert([
            "nom"=>"Nokia v3",
            "prix_ht"=>452300,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone6.png"
        ]);

        DB::table('phones')->insert([
            "nom"=>"Techno Camom1 13",
            "prix_ht"=>927400,
            "description"=>"Ecouteurs",
            "photo_principale"=>"phone7.png"
        ]);

    }
}

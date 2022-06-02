<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class laptopseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptops')->insert([
            "nom"=> "Laptop1",
            "prix_ht"=>195000,
            "description"=>"Laptop2",
            "photo_principale"=>"laptop1.png"
        ]);

        DB::table('laptops')->insert([
            "nom"=>"Laptop2",
            "prix_ht"=>255000,
            "description"=>"Laptop3",
            "photo_principale"=>"laptop2.png"
        ]);

        DB::table('laptops')->insert([
            "nom"=>"Laptop3",
            "prix_ht"=>300000,
            "description"=>"Laptop",
            "photo_principale"=>"laptop3.png"
        ]);

        DB::table('laptops')->insert([
            "nom"=> "Laptop4",
            "prix_ht"=>87000,
            "description"=>"Electromenager",
            "photo_principale"=>"laptop4.png"
        ]);

        DB::table('laptops')->insert([
            "nom"=>"Laptop5",
            "prix_ht"=>124500,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop5.png"
        ]);

        DB::table('laptops')->insert([
            "nom"=>"Laptop6",
            "prix_ht"=>133700,
            "description"=>"Ecouteurs",
            "photo_principale"=>"laptop6.png"
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "nom"=>"SmarthPhones",
            "is_online"=>1,
        ]);
        DB::table('categories')->insert([
            "nom"=>"Televiseurs HD Full Option",
            "is_online"=>1,
        ]);
        DB::table('categories')->insert([
            "nom"=>"Ordinateurs et Accessoires",
            "is_online"=>1,
        ]);
        DB::table('categories')->insert([
            "nom"=>"Electromenagers",
            "is_online"=>1,
        ]);
        DB::table('categories')->insert([
            "nom"=>"Autres Appareils Multimedia",
            "is_online"=>1,
        ]);

    }
}

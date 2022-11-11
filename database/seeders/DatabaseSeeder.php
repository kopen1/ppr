<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\postingan;
use App\Models\kategori;
use Faker\Provider\id_ID\Person;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
   //User::factory(5)->create();
   //postingan::factory(1000)->create();
   $this->kat();
    }
    
    function kat(){
     user::create([
       "name" => "Admin",
       "username" => "admin",
       "rule" => 1,
       "email" => "iqbalshof@gmail.com",
       "password" => bcrypt('Langsing1@'),
       ]);
     kategori::create([
       "slug" => "putra",
       "name" => "putra"
       ]);
     kategori::create([
       "slug" => "putri",
       "name" => "putri"
       ]);
     kategori::create([
       "slug" => "tahassus",
       "name" => "tahassus"
       ]);
     
     
    }
}

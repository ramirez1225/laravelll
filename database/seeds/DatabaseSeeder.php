<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          DB::table('articulos')->insert([
           'articulo' => '',
            'comentario' => '',
          ]);


         DB::table('comentarios')->insert([
            'comentario' => 'muy asido',
            
          ]);


    }
}

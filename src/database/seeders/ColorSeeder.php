<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color')->insert([ 'description' => 'Branco']);
        DB::table('color')->insert([ 'description' => 'Amarelo']);
        DB::table('color')->insert([ 'description' => 'Cinza']);
        DB::table('color')->insert([ 'description' => 'Preto']);
        DB::table('color')->insert([ 'description' => 'Vermelho']);
        DB::table('color')->insert([ 'description' => 'Azul']);
    }
}

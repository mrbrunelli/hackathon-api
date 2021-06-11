<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([ 'description' => 'Toyota']);
        DB::table('brand')->insert([ 'description' => 'Volkswagen']);
        DB::table('brand')->insert([ 'description' => 'Ford']);
        DB::table('brand')->insert([ 'description' => 'Honda']);
        DB::table('brand')->insert([ 'description' => 'Hyundai']);
        DB::table('brand')->insert([ 'description' => 'Nissan']);
        DB::table('brand')->insert([ 'description' => 'Chevrolet']);
        DB::table('brand')->insert([ 'description' => 'Kia']);
        DB::table('brand')->insert([ 'description' => 'Mercedes']);
        DB::table('brand')->insert([ 'description' => 'BMW']);
        DB::table('brand')->insert([ 'description' => 'Fiat']);
    }
}

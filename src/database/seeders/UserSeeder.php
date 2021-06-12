<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'Administrador',
            'login' => 'admin',
            'password' => Hash::make('1234')
        ]);
        DB::table('user')->insert([
            'name' => 'Renato',
            'login' => 'vendedor1',
            'password' => Hash::make('vendedor1')
        ]);
        DB::table('user')->insert([
            'name' => 'Maria Silva',
            'login' => 'vendedor2',
            'password' => Hash::make('vendedor2')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle')->insert([
            'model' => 'KA 1.0 Ti-Vct Flex Se Manual',
            'yearmodel' => 2018 ,
            'yearmanufacture' => 2019,
            'type' => 'used',
            'brand_id'=> 3,
            'color_id' => 1,
            'price' => 46890.00,
            'photo' => 'fordka.jpg',
            'user_id' => 1,
            'optionals' => 'Combustível : flex, Licenciado, Km rodados : 54.286, Travas elétricas, Ar condicionado, Volante com regulagem de altura'
        ]);
        DB::table('vehicle')->insert([
            'model' => 'Tracker 1.0 Turbo Flex Lt Automático',
            'yearmodel' => 2020 ,
            'yearmanufacture' => 2021,
            'type' => 'used',
            'brand_id'=> 2,
            'color_id' => 3,
            'price' => 106290.00,
            'user_id' => 2,
            'photo' => 'chevrolet.jpg',
            'optionals' => 'Combustível : flex, Licenciado, Km rodados : 6.781, Ar condicionado, Alarme, Controle de tração, DVD Player'
        ]);
        DB::table('vehicle')->insert([
            'model' => 'Argo 1.0 Firefly Flex Drive Manual',
            'yearmodel' => 2020 ,
            'yearmanufacture' => 2020,
            'brand_id'=> 11,
            'type' => 'used',
            'color_id' => 5,
            'price' => 46890.00,
            'user_id' => 3,
            'photo' => 'fiat.jpg',
            'optionals' => 'Combustível : flex, Licenciado, Km rodados : 46.555, Alarme, Desembaçador traseiro, Ar quente, Vidros elétricos'
        ]);
    }
}

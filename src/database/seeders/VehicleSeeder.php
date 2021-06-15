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
        DB::table('vehicle')->insert([
            'model' => 'Sentra 2.0 Sv 16v Flex 4p Automático',
            'yearmodel' => 2013,
            'yearmanufacture' => 2013,
            'brand_id'=> 6,
            'type' => 'used',
            'color_id' => 6,
            'price' => 46390.00,
            'user_id' => 3,
            'photo' => 'nissan-sentra.jpg',
            'optionals' => 'Combustível : flex, Licenciado, Km rodados : 96.836, Alarme, Retrovisores elétricos, Ar quente, Vidros elétricos, Sensor de estacionamento'
        ]);
        DB::table('vehicle')->insert([
            'model' => 'QQ 1.0 Look Flex 5p',
            'yearmodel' => 2018,
            'yearmanufacture' => 2018,
            'brand_id'=> 12,
            'type' => 'new',
            'color_id' => 6,
            'price' => 29990.00,
            'user_id' => 1,
            'photo' => 'Cherry.png',
            'optionals' => 'Combustível : Gasolina e Álcool, Licenciado, Km rodados : 42.000 , Alarme, 5 portas, Transmissão Manual'
        ]);
        DB::table('vehicle')->insert([
            'model' => 'HB20 1.0 Comfort Plus 12v Flex 4p Manual',
            'yearmodel' => 2019,
            'yearmanufacture' => 2018,
            'brand_id'=> 5,
            'type' => 'used',
            'color_id' => 4,
            'price' => 53390.00,
            'user_id' => 1,
            'photo' => 'hb20.jpg',
            'optionals' => 'Combustível: Flex, Licenciado, Km rodados: 41.490, Encosto de Cabeça Traseiro, Computador a bordo, Câmbio Manual'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CarrosselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = [
            [
                'produto_id'  => 1,
                'titulo'        => 'Ovos',
                'img'           => 'main-slider1.jpg',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'produto_id'  => 2,
                'titulo'        => 'Ração',
                'img'           => 'main-slider2.jpg',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'produto_id'  => 3,
                'titulo'        => 'Chocadeiras',
                'img'           => 'main-slider3.jpg',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'produto_id'  => 4,
                'titulo'        => 'Bebedouros',
                'img'           => 'main-slider4.jpg',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $carrossel = DB::table('carrossel')->get();
            if (in_array($array['titulo'], $carrossel->toArray())) {
                DB::table('carrossel')->insert($array);
            }
        }
    }
}

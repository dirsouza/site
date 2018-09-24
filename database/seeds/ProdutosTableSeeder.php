<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = [
            'aves'  => [
                [
                    'categoria_id'  => 1,
                    'titulo'        => 'Ovos',
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ],
                [
                    'categoria_id'  => 1,
                    'titulo'        => 'Ração',
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ]
            ],
            'acessorios'  => [
                [
                    'categoria_id'  => 2,
                    'titulo'        => 'Chocadeiras',
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ],
                [
                    'categoria_id'  => 2,
                    'titulo'        => 'Bebedouros',
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ]
            ]
        ];

        foreach ($arrays as $_arrays) {
            foreach ($_arrays as $array) {
                $produtos = DB::table('produtos')->get();
                if (in_array($array['titulo'], $produtos->toArray())) {
                    DB::table('produtos')->insert($array);
                }
            }
        }
    }
}

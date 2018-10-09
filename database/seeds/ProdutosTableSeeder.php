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
                    'titulo_url'    => 'ovos',
                    'posicao'       => 1,
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ],
                [
                    'categoria_id'  => 1,
                    'titulo'        => 'Ração',
                    'titulo_url'    => 'racao',
                    'posicao'       => 2,
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ]
            ],
            'acessorios'  => [
                [
                    'categoria_id'  => 2,
                    'titulo'        => 'Chocadeiras',
                    'titulo_url'    => 'chocadeiras',
                    'posicao'       => 1,
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ],
                [
                    'categoria_id'  => 2,
                    'titulo'        => 'Bebedouros',
                    'titulo_url'    => 'bebedouros',
                    'posicao'       => 2,
                    'status'        => 1,
                    'created_at'    => date('Y-m-d H:i:s'),
                    'updated_at'    => date('Y-m-d H:i:s')
                ]
            ]
        ];

        foreach ($arrays as $_arrays) {
            foreach ($_arrays as $array) {
                $produtos = DB::table('produtos')->where('titulo', $array['titulo'])->first();
                if (empty($produtos)) {
                    DB::table('produtos')->insert($array);
                }
            }
        }
    }
}

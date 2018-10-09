<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
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
                'menu_site_id'  => 2,
                'titulo'        => 'Aves',
                'titulo_url'    => 'aves',
                'posicao'       => 2,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'menu_site_id'  => 2,
                'titulo'        => 'Acessórios',
                'titulo_url'    => 'acessorios',
                'posicao'       => 1,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $categorias = DB::table('categorias')->where('titulo', $array['titulo'])->first();
            if (empty($categorias)) {
                DB::table('categorias')->insert($array);
            }
        }
    }
}

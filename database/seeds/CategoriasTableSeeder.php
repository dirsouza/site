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
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'menu_site_id'  => 2,
                'titulo'        => 'Acessórios',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $categorias = DB::table('categorias')->get();
            if (in_array($array['titulo'], $categorias->toArray())) {
                DB::table('categorias')->insert($array);
            }
        }
    }
}

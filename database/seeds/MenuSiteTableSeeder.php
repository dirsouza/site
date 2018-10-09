<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = [
            'home'      => [
                'titulo'        => 'Home',
                'url'           => 'site.index',
                'posicao'       => 1,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            'produtos'  => [
                'titulo'        => 'Produtos',
                'url'           => 'site.produtos',
                'posicao'       => 2,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            'contato'   => [
                'titulo'        => 'Contato',
                'url'           => 'site.contato',
                'posicao'       => 3,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $menus = DB::table('menu_site')->where('titulo', $array['titulo'])->first();
            if (empty($menus)) {
                DB::table('menu_site')->insert($array);
            }
        }
    }
}

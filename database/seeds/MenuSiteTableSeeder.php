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
                'url'           => '/',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            'produtos'  => [
                'titulo'        => 'Produtos',
                'url'           => '/produtos',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            'contato'   => [
                'titulo'        => 'Contato',
                'url'           => '/contato',
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $menus = DB::table('menu_site')->get();
            if (in_array($array['titulo'], $menus->toArray())) {
                DB::table('menu_site')->insert($array);
            }
        }
    }
}

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
                'titulo'    => 'Home',
                'url'       => '/',
                'status'    => 1
            ],
            'produtos'  => [
                'titulo'    => 'Produtos',
                'url'       => '/products',
                'status'    => 1
            ],
            'contato'   => [
                'titulo'    => 'Contato',
                'url'       => '/contact',
                'status'    => 1
            ]
        ];

        foreach ($arrays as $array) {
            DB::table('menu_site')->updateOrInsert($array);
        }
    }
}

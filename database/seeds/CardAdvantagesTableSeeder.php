<?php

use Illuminate\Database\Seeder;

class CardAdvantagesTableSeeder extends Seeder
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
                'titulo'        => 'Nós amamos nossos clientes',
                'icone'         => 'fa-heart',
                'posicao'       => 1,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'titulo'        => 'Melhores preços',
                'icone'         => 'fa-tags',
                'posicao'       => 2,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'titulo'        => 'Assistência técnica',
                'icone'         => 'fa-wrench',
                'posicao'       => 3,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'titulo'        => '100% de satisfação garantida',
                'icone'         => 'fa-thumbs-up',
                'posicao'       => 4,
                'status'        => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($arrays as $array) {
            $cadVantagens = DB::table('card_vantagens')->get();
            if (!in_array($array['titulo'], $cadVantagens->toArray())) {
                DB::table('card_vantagens')->insert($array);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuSiteTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ProdutosTableSeeder::class);
        $this->call(CarrosselTableSeeder::class);
        $this->call(CardAdvantagesTableSeeder::class);
    }
}

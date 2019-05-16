<?php

use Illuminate\Database\Seeder;
use App\Anuncio;


class AnunciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Anuncio::class, 10)->create();
    }
}

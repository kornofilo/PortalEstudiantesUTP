<?php

use Illuminate\Database\Seeder;
use App\Evento;


class EventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Evento::class, 20)->create();
    }
}

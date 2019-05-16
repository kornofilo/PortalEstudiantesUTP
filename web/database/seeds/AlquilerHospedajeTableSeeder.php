<?php

use Illuminate\Database\Seeder;
use App\Hospedaje;


class AlquilerHospedajeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hospedaje::class, 10)->create();
    }
}

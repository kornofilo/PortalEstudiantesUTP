<?php

use Illuminate\Database\Seeder;
use App\Bolsatrabajo;

class BolsaTrabajoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(BolsaTrabajo::class, 5)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Tutorias;

class TutoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tutorias::class, 10)->create();

    }
}

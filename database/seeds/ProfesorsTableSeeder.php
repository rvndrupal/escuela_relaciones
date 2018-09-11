<?php

use Illuminate\Database\Seeder;

class ProfesorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Profesor::class, 10)->create();
    }
}

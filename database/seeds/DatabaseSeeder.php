<?php

use Illuminate\Database\Seeder;

use App\Alumno;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ProfesorsTableSeeder::class);

        // factory(Alumno::class, 20)->create();
    }
}

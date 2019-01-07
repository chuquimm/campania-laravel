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
        // $this->call(UsersTableSeeder::class);
        $this->call(TiposangresTableSeeder::class);
        $this->call(DonantesTableSeeder::class);
        $this->call(CampaniasTableSeeder::class);
        $this->call(DistritosTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
    }
}

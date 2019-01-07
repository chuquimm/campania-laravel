<?php

use Illuminate\Database\Seeder;
use App\Campania;

class CampaniasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campania = new Campania;
        $campania->nombre = 'Campaña 1';
        $campania->descripcion = 'Campaña de prueba 1';
        $campania->save();

        $campania = new Campania;
        $campania->nombre = 'Campaña 2';
        $campania->descripcion = 'Campaña de prueba 2';
        $campania->save();
    }
}

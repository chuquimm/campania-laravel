<?php

use Illuminate\Database\Seeder;
use App\Donante;

class DonantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donante = new Donante;
        $donante->nombre='Marcos';
        $donante->apellido='Chuquicondor';
        $donante->correo='marcos@correo.com';
        $donante->dni='70746679';
        $donante->celular='969219171';
        $donante->fnacimiento=date("Y-m-d", strtotime("1998-03-23"));
        $donante->genero='1';
        $donante->tiposangre_id='7';
        $donante->distrito_id='200101';
        $donante->foto='avatar.png';
        $donante->sms=0;
        $donante->save();
    }
}

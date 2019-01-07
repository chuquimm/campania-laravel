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
        $donante->dni='70854469';
        $donante->celular='968574142';
        $donante->fnacimiento=date("Y-m-d", strtotime("1998-03-23"));
        $donante->genero='1';
        $donante->tiposangre_id='7';
        $donante->distrito_id='200101';
        $donante->foto='avatar.png';
        $donante->sms=0;
        $donante->save();


        $donante = new Donante;
        $donante->nombre='Eduardo';
        $donante->apellido='Mejia';
        $donante->correo='mejia@correo.com';
        $donante->dni='74589632';
        $donante->celular='362514785';
        $donante->fnacimiento=date("Y-m-d", strtotime("1997-09-30"));
        $donante->genero='1';
        $donante->tiposangre_id='7';
        $donante->distrito_id='200101';
        $donante->foto='avatar.png';
        $donante->sms=0;
        $donante->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create( [
        'id'=>'010000',
        'nombre'=>'Amazonas'
        ] );
                    
        Departamento::create( [
        'id'=>'020000',
        'nombre'=>'Áncash'
        ] );
                    
        Departamento::create( [
        'id'=>'030000',
        'nombre'=>'Apurímac'
        ] );
                    
        Departamento::create( [
        'id'=>'040000',
        'nombre'=>'Arequipa'
        ] );
                    
        Departamento::create( [
        'id'=>'050000',
        'nombre'=>'Ayacucho'
        ] );
                    
        Departamento::create( [
        'id'=>'060000',
        'nombre'=>'Cajamarca'
        ] );
                    
        Departamento::create( [
        'id'=>'070000',
        'nombre'=>'Callao'
        ] );
                    
        Departamento::create( [
        'id'=>'080000',
        'nombre'=>'Cusco'
        ] );
                    
        Departamento::create( [
        'id'=>'090000',
        'nombre'=>'Huancavelica'
        ] );
                    
        Departamento::create( [
        'id'=>'100000',
        'nombre'=>'Huánuco'
        ] );
                    
        Departamento::create( [
        'id'=>'110000',
        'nombre'=>'Ica'
        ] );
                    
        Departamento::create( [
        'id'=>'120000',
        'nombre'=>'Junín'
        ] );
                    
        Departamento::create( [
        'id'=>'130000',
        'nombre'=>'La Libertad'
        ] );
                    
        Departamento::create( [
        'id'=>'140000',
        'nombre'=>'Lambayeque'
        ] );
                    
        Departamento::create( [
        'id'=>'150000',
        'nombre'=>'Lima'
        ] );
                    
        Departamento::create( [
        'id'=>'160000',
        'nombre'=>'Loreto'
        ] );
                    
        Departamento::create( [
        'id'=>'170000',
        'nombre'=>'Madre de Dios'
        ] );
                    
        Departamento::create( [
        'id'=>'180000',
        'nombre'=>'Moquegua'
        ] );
                    
        Departamento::create( [
        'id'=>'190000',
        'nombre'=>'Pasco'
        ] );
                    
        Departamento::create( [
        'id'=>'200000',
        'nombre'=>'Piura'
        ] );
                    
        Departamento::create( [
        'id'=>'210000',
        'nombre'=>'Puno'
        ] );
                    
        Departamento::create( [
        'id'=>'220000',
        'nombre'=>'San Martín'
        ] );
                    
        Departamento::create( [
        'id'=>'230000',
        'nombre'=>'Tacna'
        ] );
                    
        Departamento::create( [
        'id'=>'240000',
        'nombre'=>'Tumbes'
        ] );
                    
        Departamento::create( [
        'id'=>'250000',
        'nombre'=>'Ucayali'
        ] );
    }
}

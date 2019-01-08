<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Marcos',
            'password' => encrypt('1234'),
            'email' => 'marcos@correo.com'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = [
            'codpes' => '11170411',
            'name'   => 'Joaquim Navarro',
            'email'  => 'joaquim@usp.br',
            'status' => 'Ativo',
        ];

        User::create($usuario);

        factory(User::class, 50)->create();
    }
}

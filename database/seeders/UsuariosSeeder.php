<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'prueba1',
            'correo' => 'prueba1@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'rol' => 'Administrador',
        ]);
        DB::table('usuarios')->insert([
            'nombre' => 'prueba2',
            'correo' => 'prueba2@gmail.com',
            'contraseña' =>bcrypt('1234'),
            'rol' => 'Colaborador',
        ]);

    }
}

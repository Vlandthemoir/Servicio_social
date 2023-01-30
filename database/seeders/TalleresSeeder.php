<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TalleresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talleres')->insert([
            'nombre' => 'Guitarra',
            'imagen' => 'https://images.pexels.com/photos/3428498/pexels-photo-3428498.jpeg?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Verano',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Piano',
            'imagen' => 'https://images.pexels.com/photos/2592179/pexels-photo-2592179.jpeg?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Verano',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Dibujo',
            'imagen' => 'https://images.pexels.com/photos/1109393/pexels-photo-1109393.jpeg?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Verano',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Dibujo digital',
            'imagen' => 'https://images.pexels.com/photos/301792/pexels-photo-301792.jpeg?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Verano',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Acuearela',
            'imagen' => 'https://images.pexels.com/photos/1767014/pexels-photo-1767014.jpeg?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Verano',
        ]);

        DB::table('talleres')->insert([
            'nombre' => 'Ajedrez',
            'imagen' => 'https://images.pexels.com/photos/6114949/pexels-photo-6114949.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Permanente',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Pintura',
            'imagen' => 'https://images.pexels.com/photos/3978855/pexels-photo-3978855.png?auto=compress&cs=tinysrgb&w=600',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Permanente',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Cine',
            'imagen' => 'https://images.pexels.com/photos/3945321/pexels-photo-3945321.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Permanente',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Ceramica',
            'imagen' => 'https://images.pexels.com/photos/5302953/pexels-photo-5302953.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Permanente',
        ]);
        DB::table('talleres')->insert([
            'nombre' => 'Escultura',
            'imagen' => 'https://images.pexels.com/photos/3705876/pexels-photo-3705876.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'dias' => 'Lunes a viernes',
            'horario' => '9 a 10 am',
            'edades' => '10 a 15 años',
            'tipo' => 'Permanente',
        ]);
    }
}

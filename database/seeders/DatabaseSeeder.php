<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(TalleresSeeder::class);
        $this->call(GaleriaSeeder::class);
        $this->call(ArticulosSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}

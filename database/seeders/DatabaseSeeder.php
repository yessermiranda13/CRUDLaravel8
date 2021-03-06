<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PacienteSeeder;
use Database\Seeders\ProveedorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(PacienteSeeder::class);
        $this->call(ProveedorSeeder::class);
    }
}

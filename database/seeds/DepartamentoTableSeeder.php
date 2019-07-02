<?php

use Illuminate\Database\Seeder;
use App\Departemento;
class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departemento::create([
          'name' => 'Recursos Materiales y Servicios',
          'role' => '1'
        ]);
        Departemento::create([
          'name' => 'Mantenimiento de Equipo',
          'role' => '1'
        ]);
        Departemento::create([
          'name' => 'Centro de Cómputo',
          'role' => '1'
        ]);
        Departemento::create([
          'name' => 'Administrador',
          'role' => '2'
        ]);

    }
}

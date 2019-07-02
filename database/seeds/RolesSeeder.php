<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recursos = Role::create([
            'name' => 'Recursos Materiales y Servicios'
        ]);
        $mantenimiento_equipo = Role::create([
            'name' => 'Mantenimiento de Equipo'
        ]);
        $centro_computo = Role::create([
            'name' => 'Centro de Cómputo'
        ]);
        $admin = Role::create([
            'name' => 'Administrador'
        ]);

        $enviar_infraestructura = Permission::create(['name' => 'Solicitar formato infraestructura']);
        $recibir_infraestructura = Permission::create(['name' => 'Recibir solicitudes de infraestructura']);

        $enviar_correctivos = Permission::create(['name' => 'Solicitar formato correctivo']);
        $recibir_correctivos = Permission::create(['name' => 'Recibir solicitudes  correctivo']);

        $crear_preventivo = Permission::create(['name' => 'Crear preventivo']);

        $admin->syncPermissions([ $enviar_infraestructura, $recibir_infraestructura, $enviar_correctivos, $recibir_correctivos, $crear_preventivo, ]);
        $recursos->syncPermissions([ $enviar_infraestructura, $recibir_infraestructura, $enviar_correctivos, $recibir_correctivos, $crear_preventivo, ]);
        $centro_computo->syncPermissions([ $enviar_infraestructura, $recibir_infraestructura, $enviar_correctivos, $recibir_correctivos, $crear_preventivo, ]);
        $mantenimiento_equipo->syncPermissions([ $enviar_infraestructura, $recibir_infraestructura, $enviar_correctivos, $recibir_correctivos, $crear_preventivo, ]);

        $user = \App\User::where('email', 'admin@mail.com')->first();
        $user->assignRole('Administrador');
    }
}

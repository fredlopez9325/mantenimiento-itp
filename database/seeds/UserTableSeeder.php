<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrador',
            'email' => 'admin@mail.com',
            'password' => \Hash::make('123456'),
            'role' => 'Administrador'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'Nombre' => 'Karen Berenice',
            'ApellidoP' => 'Gonzalez',
            'ApellidoM' => 'Benitez',
            'Telefono' => '3321653434',
            'Correo' => 'belieber111099@hotmail.com',
            'Puesto' => 'Vendedor',
            'Turno' => 'Matutino',
            'mesa_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class TelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        \DB::table('telas')->insert([
            'nombre_tela' => 'Magaly',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Tela::create([
            'nombre_tela' => 'Razo Crepe'
        ]);*/

        factory(App\Tela::class,20)->create();
    }
}

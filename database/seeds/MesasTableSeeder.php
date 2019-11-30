<?php

use Illuminate\Database\Seeder;

class MesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mesa::class, 10)->create();
    }
}

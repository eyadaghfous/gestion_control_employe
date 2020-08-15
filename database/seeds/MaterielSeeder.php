<?php

use Illuminate\Database\Seeder;

class MaterielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Materiel::class,100)->create();

    }
}

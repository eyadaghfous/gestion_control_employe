<?php

use Illuminate\Database\Seeder;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Tache::class,100)->create();

    }
}

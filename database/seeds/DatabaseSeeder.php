<?php

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
        $this->call(UserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(DepartementSeeder::class);
        $this->call(TacheSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ProjetSeeder::class);
        $this->call(ReglementSeeder::class);
        $this->call(FactureSeeder::class);
        $this->call(MaterielSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(ContratSeeder::class);
        $this->call(TimesheetSeeder::class);

    }
}

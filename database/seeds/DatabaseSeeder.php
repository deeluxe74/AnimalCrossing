<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PoissonSeeder::class);
        $this->call(InsecteSeeder::class);
        $this->call(FossileSeeder::class);
        $this->call(AutresSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AdministrateurSeeder::class,
            StagiaireSeeder::class,
            CandidatureSeeder::class,
            TacheSeeder::class,
            CommunicationSeeder::class,
        ]);
    }
}

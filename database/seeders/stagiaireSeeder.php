<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stagiaire;

class stagiaireSeeder extends Seeder
{
    public function run()
    {
        Stagiaire::factory()->count(5)->create();
    }
}

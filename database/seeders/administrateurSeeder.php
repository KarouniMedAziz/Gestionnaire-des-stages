<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrateur;

class administrateurSeeder extends Seeder
{
    public function run()
    {
        Administrateur::factory()->count(5)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidature;

class candidatureSeeder extends Seeder
{
    public function run()
    {
        Candidature::factory()->count(20)->create();
    }
}

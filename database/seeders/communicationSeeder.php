<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Communication;

class communicationSeeder extends Seeder
{
    public function run()
    {
        Communication::factory()->count(50)->create();
    }
}

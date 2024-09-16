<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tache;

class tacheSeeder extends Seeder
{
    public function run()
    {
        Tache::factory()->count(10)->create();
    }
}

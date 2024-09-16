<?php

namespace Database\Factories;

use App\Models\Tache;
use App\Models\Administrateur;
use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class tacheFactory extends Factory
{
    protected $model = Tache::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'startDate' => $this->faker->date(),
            'endDate' => $this->faker->date(),
            'status' => $this->faker->randomElement(['not started', 'in progress', 'completed']),
            'assigned_by' => Administrateur::factory(),
            'accomplished_by' => Stagiaire::factory(),
        ];
    }
}

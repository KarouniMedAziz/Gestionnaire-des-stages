<?php

namespace Database\Factories;

use App\Models\Stagiaire;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class stagiaireFactory extends Factory
{
    protected $model = Stagiaire::class;

    public function definition()
    {
        return [
            'userID' => User::factory()->create(['role' => 'stagiaire'])->id, 
            'fieldOfStudy' => $this->faker->word,
            'levelOfStudy' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
        ];
    }
}

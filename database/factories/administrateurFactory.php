<?php

namespace Database\Factories;

use App\Models\Administrateur;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class administrateurFactory extends Factory
{
    protected $model = Administrateur::class;

    public function definition()
    {
        return [
            'userID' => User::factory()->create(['role' => 'administrateur'])->id, 
        ];
    }
}

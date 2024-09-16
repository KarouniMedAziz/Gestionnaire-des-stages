<?php

namespace Database\Factories;

use App\Models\Communication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class communicationFactory extends Factory
{
    protected $model = Communication::class;

    public function definition()
    {
        return [
            'sender' => User::factory(),
            'receiver' => User::factory(),
            'messageContent' => $this->faker->sentence,
            'timestamp' => $this->faker->dateTime,
        ];
    }
}

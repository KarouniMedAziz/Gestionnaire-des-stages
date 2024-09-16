<?php

namespace Database\Factories;

use App\Models\Candidature;
use App\Models\Stagiaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class candidatureFactory extends Factory
{
    protected $model = Candidature::class;

    public function definition()
    {
        return [
            'stagiaire_id' => Stagiaire::factory(),
            'submissionDate' => $this->faker->date(),
            'status' => $this->faker->randomElement(['en attente', 'accepté', 'refusé']),
            'CV' => $this->faker->word . '.pdf',
            'keywords' => json_encode([$this->faker->word, $this->faker->word]),
        ];
    }
}

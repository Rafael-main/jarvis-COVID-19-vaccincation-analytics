<?php

namespace Database\Factories;

use App\Models\Establishment;
use App\Models\User;
use App\Models\VisitedAt;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitedAtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VisitedAt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'visitor_id' => User::inRandomOrder()->first()->id,
            'establishment_id' => Establishment::inRandomOrder()->first()->id,
            'entered_at' => now(),
        ];
    }
}

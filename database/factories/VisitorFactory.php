<?php

namespace Database\Factories;

use App\Models\Visitor;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visitor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'first_name' => $this->faker->firstName(),
            // 'middle_name' => $this->faker->firstName(),
            // 'last_name' => $this->faker->lastName(),
            // 'suffix_name' => 'Jr.',
            // 'gender' => $this->faker->,
            // 'birth_month',
            // 'birth_day',
            // 'birth_year',
            // 'primary_phone_number',
            // 'secondary_phone_number',
            // 'is_transient',
            // 'user_id',
            // 'address_id'
        ];
    }
}

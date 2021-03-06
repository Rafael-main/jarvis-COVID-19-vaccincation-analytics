<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'country' => $this->faker->country(),
            // 'province' => 'Lanao del Norte',
            // 'city_or_municipality' => 'Iligan City',
            // 'barangay' => 'Tubod',
            // 'zipcode' => 9200,
            // 'complete_address',
            // 'complete_provincial_address',
            // 'longitude',
            // 'lattitude',
        ];
    }
}

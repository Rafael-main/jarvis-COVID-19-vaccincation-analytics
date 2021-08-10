<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Establishment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstablishmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Establishment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //     'establishment_name',
            //     'business_permit_number',
            //     'establishment_type',
            //     'address_id' => Address::inRandomOrder()->first()->
        ];
    }
}

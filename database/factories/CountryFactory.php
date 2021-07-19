<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'numeric_code' => $this->faker->unique()->numberBetween(100, 999),
            'alpha_2_code' => $this->faker->unique()->countryCode(),
            'alpha_3_code' => $this->faker->unique()->countryISOAlpha3(),
        ];
    }
}

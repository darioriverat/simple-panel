<?php

namespace Database\Factories;

use App\Models\MerchantCategoryCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantCategoryCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MerchantCategoryCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->numberBetween(1000, 9999),
            'description' => $this->faker->name
        ];
    }
}

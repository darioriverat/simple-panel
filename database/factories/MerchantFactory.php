<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Merchant;
use App\Models\MerchantCategoryCode;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Merchant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->name(),
            'merchant_category_code_id' => MerchantCategoryCode::factory(),
            'country_id' => Country::factory()
        ];
    }
}

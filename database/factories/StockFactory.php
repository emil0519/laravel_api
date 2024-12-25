<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Stock;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{

    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'industry_category' => fake()->company(),
            'stock_id' => fake()->numerify('####'),
            'stock_name' => fake()->company(),
            'type' => fake()->randomElement(['Common', 'Preferred', 'ETF']),
        ];
    }
}

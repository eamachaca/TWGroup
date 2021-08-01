<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($this->faker));
        return [
            'name' => $this->faker->productName,
            'quantity' => $this->faker->numberBetween(1, 110),
            'price' => $this->faker->randomFloat(2, 100, 50000),
            'invoice_id' => Invoice::inRandomOrder()->first()->id
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;




    public function definition()
    {
        return [
            'name' => Str::random(6),

            'detail' => $this->faker->text,
        ];
    }
}
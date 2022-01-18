<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



use Faker\Generator as Faker;
use League\CommonMark\Inline\Element\Code;

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
        return [
            'user_id' => rand(1,100),
            'category_id' => Category::all()->random(1)->first()->id,
            'category_name' => Category::all()->random(1)->first()->name,
            'title'  => $this->faker->sentence,
            'price' => $this->faker->buildingNumber(552),
            'type' => $this->faker->text(50),
            'description' => $this->faker->text(400),
            'pictures' => $this->faker->image(),
            'location' => $this->faker->text(25),
        ];
    }
}

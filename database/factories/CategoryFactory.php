<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;
use Faker\Generator as Faker;

class CategoryFactory extends Factory 
{

     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    public function definition()
    {
        
        return [
            //
        ];
    }
}


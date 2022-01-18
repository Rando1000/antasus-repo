<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\Auth\Models\Role;
use App\Domains\Auth\Models\User;
use Faker\Generator as Faker;

class RoleFactory extends Factory 
{
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement([User::TYPE_ADMIN, User::TYPE_USER]),
            'name' => $this->faker->word,
        ];
    }
}


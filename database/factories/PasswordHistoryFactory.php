<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Domains\Auth\Models\PasswordHistory;
use Faker\Generator as Faker;

class PasswordHistoryFactory extends Factory 
{
    public function definition()
    {
    return 
    [
        'user_id' => $this->faker->randomNumber(),
        'password' => bcrypt($this->faker->password),
    ];
    }
}

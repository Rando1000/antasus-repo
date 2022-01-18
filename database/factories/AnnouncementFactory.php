<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Domains\Announcement\Models\Announcement;
use Faker\Generator as Faker;

class AnnouncementFactory extends Factory 
{
    public function definition()
    {
        return [
            'area' => $this->faker->randomElement(['frontend', 'backend']),
            'type' => $this->faker->randomElement(['info', 'danger', 'warning', 'success','antasus']),
            'message' => $this->faker->text,
            'enabled' => $this->faker->boolean,
            'starts_at' => $this->faker->dateTime(),
            'ends_at' => $this->faker->dateTime(),
        ];
    }


    public function suspended() 
    {
        return [
            'enabled' => true,
        ];
    }

    public function suspended() 
    {
        return [
            'enabled' => false,
        ];
    }

    public function suspended() 
    {
        return [
            'area' => 'frontend',
        ];
    }

    public function suspended() 
    {
        return [
            'area' => 'backend',
        ];
    }

    public function suspended() 
    {
        return [
            'area' => null,
        ];
    }

    public function suspended() 
    {
        return [
            'starts_at' => null,
            'ends_at' => null,
        ];
    }

    public function suspended() 
    {
        return [
            'starts_at' => now()->subWeek(),
            'ends_at' => now()->addWeek(),
        ];
    }

    public function suspended() 
    {
        return [
            'starts_at' => now()->subWeeks(2),
            'ends_at' => now()->subWeek(),
        ];
    }
}

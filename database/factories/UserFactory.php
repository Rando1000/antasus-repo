<?php

namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\Auth\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

class UserFactory extends Factory 
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        // return [
        //     'type' => $this->faker->randomElement([User::TYPE_ADMIN, User::TYPE_USER]),
        //     'name' => $this->faker->name,
        //     'email' => $this->faker->unique()->safeEmail,
        //     'email_verified_at' => now(),
        //     'password' => 'secret',
        //     'password_changed_at' => null,
        //     'remember_token' => Str::random(10),
        //     'active' => true,
        // ];
    }


    // public function suspended() 
    // {
    //     return [
    //         'type' => User::TYPE_ADMIN,
    //     ];
    // }


    // public function suspended() 
    // {
    //     return [
    //         'type' => User::TYPE_USER,
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'active' => true,
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'active' => false,
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'email_verified_at' => now(),
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'email_verified_at' => null,
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'password_changed_at' => now()->subYears(5),
    //     ];
    // }

    // public function suspended() 
    // {
    //     return [
    //         'deleted_at' => now(),
    //     ];
    // }
}
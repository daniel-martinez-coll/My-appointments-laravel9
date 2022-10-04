<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),            
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'dni' => $this->faker->randomNumber(8,true),
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->phoneNumber, 
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'postalCode' => $this->faker->postcode,
            'role' => $this->faker->randomElement(['2', '3']), // 1 admin 2 patient 3 doctor
            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

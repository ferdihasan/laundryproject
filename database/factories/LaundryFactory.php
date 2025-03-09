<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laundry>
 */
class LaundryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id_laundry' => fake()->
            'pelanggan_id' => fake()->numberBetween(0,9),
            'weight' => fake()->numberBetween(3,6),
            'date' => fake()->dateTimeBetween('-1 week', '-2 day'),
            'status' => fake()->randomElement(['aktif', 'siap', 'selesai']),
            'take_date' => fake()->dateTimeBetween('-1 day', 'now'),
        ];
    }
}

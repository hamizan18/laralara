<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->unique()->numerify('2024########'),
            'jurusan' => $this->faker->randomElement(['Teknologi Informasi', 'Sistem Informasi', 'Teknik Komputer', 'Ilmu Komputer']),
        ];
    }
}

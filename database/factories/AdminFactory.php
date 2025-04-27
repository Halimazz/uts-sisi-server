<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'password' => bcrypt('password123'),  // Enkripsi password atau gunakan lainnya
            'email' => $this->faker->safeEmail(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

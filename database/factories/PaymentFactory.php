<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'enrollment_id' => Enrollment::factory(),
            'amount' => $this->faker->numberBetween(100, 1000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}

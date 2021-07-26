<?php

namespace Database\Factories;

use App\Models\Bill;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'type' => $this->faker->creditCardType(),
            'due_date' =>$this->faker->numberBetween(1,31),
            'payment' => $this->faker->randomFloat(2, 10, 20),
            'balance' => $this->faker->randomFloat(2, 1000, 15000),
            'autopay' => $this->faker->randomElement([true, false])
        ];
    }
}

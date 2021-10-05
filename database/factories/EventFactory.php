<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
use App\Models\Event;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'country' => $this->faker->country(),
            'state' => $this->faker->state(),
            'date' => $this->faker->date(),
            'duration' => $this->faker->randomNumber(2),
            'is_public' => $this->faker->boolean(),
            'price' => $this->faker->randomNumber(2),
            'description' => $this->faker->text(),
            'organizer' => People::factory()
            ];
    }
}

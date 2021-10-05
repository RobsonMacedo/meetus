<?php

namespace Database\Factories;

use App\Models\EventPeople;
use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Event;
use app\Models\People;

class EventPeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventPeople::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id' => Event::all()->random()->id,
            'people_id' => People::all()->random()->id,
        ];
    }
}

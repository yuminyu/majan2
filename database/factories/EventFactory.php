<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dummyDate=$this->faker->dateTimeThisMonth;
        $yasan = "屋さん";
        return [
            'attendantId'=>$this->faker->numberBetween(1,100),
            'attendantName'=>$this->faker->name,
            'jansoId'=>$this->faker->numberBetween(1,100),
            'jansoName'=>$this->faker->name.$yasan,
            "maxPeople"=>$this->faker->numberBetween(1,2),
            'startDate'=> $dummyDate->format('Y-m-d H:i:s'),
            'endDate'=>$dummyDate->modify('+1hour')->format('Y-m-d H:i:s'),
            'is_visible'=>$this->faker->boolean
        ];
    }
}



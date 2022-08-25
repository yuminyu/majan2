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
        $availableHour = $this->faker->numberBetween(10,18);
        $minutes = [0,30];
        $mKey = array_rand($minutes);
        $addHour = $this->faker->numberBetween(1,3);
        
        $dummyDate=$this->faker->dateTimeThisMonth;
        $yasan = "屋さん";

        $start_date = $dummyDate->setTime($availableHour,$minutes[$mKey]);
        $clone = clone $start_date;
        $end_date = $clone->modify('+'.$addHour.'hour');


        return [
            'attendantId'=>$this->faker->numberBetween(1,100),
            'attendantName'=>$this->faker->name,
            'jansoId'=>$this->faker->numberBetween(1,100),
            'jansoName'=>$this->faker->name.$yasan,
            "maxPeople"=>$this->faker->numberBetween(1,2),
            'startDate'=> $start_date,
            'endDate'=> $end_date,
            'is_visible'=>$this->faker->boolean
        ];
    }
}



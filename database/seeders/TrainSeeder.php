<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $Faker): void
    {
        $faker = $Faker;

        for ($i = 0; $i < 50; $i++) {
            $newTrain = new Train();

            $newTrain->company_name = $faker->name();
            $newTrain->train_departure_station = $faker->city();
            $newTrain->train_arrival_station = $faker->city();
            $newTrain->train_departure_time = $faker->date('Y_m_d') . " " . $faker->time();
            $newTrain->train_arrival_time = $faker->date('Y_m_d') . " " . $faker->time();
            $newTrain->train_code = $faker->postcode();
            $newTrain->number_of_wagon = $faker->numberBetween(5, 12);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}

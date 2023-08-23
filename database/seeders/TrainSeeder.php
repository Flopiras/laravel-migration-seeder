<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 50; $i++) {


            $train = new Train();
            $train->company = $faker->company();
            $train->departure = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival = $faker->city();
            $train->arrival_time = $faker->time();
            $train->carriages = $faker->randomNumber(2, true);
            $train->is_in_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();

            $train->save();
        }
    }
}

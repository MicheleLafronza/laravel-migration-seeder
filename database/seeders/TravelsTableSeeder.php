<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++){
            $newTravel = new Travel();
            $newTravel->destination = $faker->city();
            $newTravel->departure_day = $faker->dateTimeBetween('now', '+3 months')->format('Y/m/d');
            $newTravel->return_day = $faker->dateTimeBetween('+4 months', '+2 years')->format('Y/m/d');
            $newTravel->price = $faker->numberBetween(100, 5000);
            $newTravel->cancellable = $faker->numberBetween(0, 1);
            $newTravel->food_included = $faker->numberBetween(0, 1);
            $newTravel->save();
            
        }
    }
}

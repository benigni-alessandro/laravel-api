<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $car = new Car();
        $car->modello = $faker->word();
        $car->color = $faker->word();
        $car->caracteristics = $faker->text();
        $car->save();
      }
    }
}

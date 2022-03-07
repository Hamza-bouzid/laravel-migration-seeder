<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;


class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i= 0; $i < 100; $i++) {
            $trip = new Trip();
            $trip->nome = $faker->firstName();
            $trip->cognome = $faker->lastName();
            $trip->email = $faker->safeEmail();
            $trip->compagnia_di_volo=$faker->company() ;
            $trip->luogo_partenza=$faker->state();
            $trip->luogo_destinazione=$faker->state();
            $trip->data_partenza=$faker->date('Y_m_d');

            $trip->save();
        }
    }
}

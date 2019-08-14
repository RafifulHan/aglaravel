<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CrudSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 50; $i++) { 
            DB::table('users')->insert([
                'name' => $faker->name,
                'age' => $faker->numberBetween(20,40),
                'address' => $faker->address
            ]);
        }
    }
}

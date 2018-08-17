<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i<10; $i++) { 
        	DB::table('stores')->insert([
        		'name' => $faker->name,
        		'lat' => $faker->latitude(),
        		'lng' => $faker->longitude()
        	]);
    	}
    }
}

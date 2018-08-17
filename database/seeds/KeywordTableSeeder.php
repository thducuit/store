<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordTableSeeder extends Seeder
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
        	DB::table('keywords')->insert([
        		'text' => $faker->word
        	]);
    	}
    }
}

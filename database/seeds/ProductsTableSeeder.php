<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
        for($i = 0; $i<100; $i++) { 
        	DB::table('products')->insert([
        		'name' => $faker->text(20)
        	]);
    	}
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id');

        for($i = 1; $i <= 100; $i++){
            DB::table('categories')->insert([
    			'name' => $faker->name
    		]);
        }
    }
}

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
        $products = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 30; $i++) { 
        	$item = [
        		'name' => $faker->name,
        		'price' => $faker->randomDigit,
        		'image' => 'images/products/'. $faker->image($dir = 'public/images/products', $width = 640, $height = 480, 'people', false),
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        		'quantity' => $faker->randomDigit,
        		'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        		'status' => rand(0, 1),
                'category_id'=>rand(1,7)
        	];
        	$products[] = $item;
        }
        DB::table('products')->insert($products);
    
    }
}

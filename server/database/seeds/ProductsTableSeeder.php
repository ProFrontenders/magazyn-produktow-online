<?php

use App\Product;
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
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->sentence,
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(5, 80),
                'old_price' => $faker->numberBetween(5, 80),
                'new_price' => $faker->numberBetween(5, 80),
                'img_lnk' => $faker->imageUrl(300, 400)
            ]);
        }
    }
}

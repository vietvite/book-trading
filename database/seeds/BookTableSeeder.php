<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        foreach (range(1,30) as $index) {
            Book::create([
                'bookname' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'author' => $faker->name,
                'description' => $faker->text,
                'quantity' => rand(0, 200),
                'price' => rand(15, 300)*1000,
                'oldPrice' => rand(30, 400)*1000,
            ]);
        }
    }
}

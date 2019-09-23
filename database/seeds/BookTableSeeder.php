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

        foreach (range(1,300) as $index) {
            Book::create([
                'id' => Str::random(10),
                'bookname' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'author' => $faker->name,
                'categoryId' => rand(1, 19),
                'description' => $faker->text,
                'quantity' => rand(0, 200),
                'price' => rand(15, 300)*1000,
                'coverPrice' => rand(30, 400)*1000,
            ]);
        }
    }
}

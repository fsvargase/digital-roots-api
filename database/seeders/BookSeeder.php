<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $authorIDs = DB::table('authors')->pluck('id');

        for ($i=1; $i < 501 ; $i++) {
            $book = new Book;
            $book->title = $faker->words(3, true);
            $book->language = $faker->randomElement(["English", "Spanish", "French", "Chinese"]);
            $book->author_id = $faker->randomElement($authorIDs);
            $book->publication_date = $faker->dateTimeThisMonth();
            $book->created_at = date("Y-m-d H:i:s");
            $book->updated_at = date("Y-m-d H:i:s");
            $book->save();
        }

    }
}

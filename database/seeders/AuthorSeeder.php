<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=1; $i < 101 ; $i++) {
            $author = new Author;
            $author->name = $faker->name;
            $author->lastname = $faker->lastName;
            $author->email = $faker->unique()->email;
            $author->birthdate = $faker->dateTimeThisMonth();
            $author->created_at = date("Y-m-d H:i:s");
            $author->updated_at = date("Y-m-d H:i:s");
            $author->save();
        }
    }
}

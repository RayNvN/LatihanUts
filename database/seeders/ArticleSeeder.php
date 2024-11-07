<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\article;
use App\Models\writer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //
        $faker = Faker::create('id_ID');
        $writers = writer::all();

        for ($i = 0; $i < 10; $i++) {
            article::create([
                'title' => $faker->sentence,
                'content' => $faker->jobTitle,
                'date' => $faker->date,
                'writers_id' => $writers->random()->id,
            ]);
        }
    }
}

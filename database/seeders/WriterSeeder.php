<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\writer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');


        for ($i = 0; $i < 10; $i++) {
            writer::create([
                'name' => $faker->name,
                'specialist' => $faker->jobTitle,
            ]);
        }
    }
}

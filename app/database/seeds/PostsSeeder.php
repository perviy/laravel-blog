<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Post::truncate();

        for ($i=0; $i<20; $i++){
            Post::create([
                'title'     => implode(' ', $faker->sentences(2)),
                'body'      => $faker->paragraph(20),
                'preview'   => $faker->imageUrl(200,200),
                'author'    => $faker->name,
            ]);
        }

    }

}

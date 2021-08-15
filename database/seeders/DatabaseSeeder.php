<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Muhammad Elang H',
        //     'email' => 'muelava@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'Maldini',
        //     'email' => 'maldini@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Excerpt judul pertama',
        //     'body' => 'Ini adalah bagian body postingan yang berisi kontent judul pertama',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Excerpt judul kedua',
        //     'body' => 'Ini adalah bagian body postingan yang berisi kontent judul kedua',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Excerpt judul ketiga',
        //     'body' => 'Ini adalah bagian body postingan yang berisi kontent judul ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}

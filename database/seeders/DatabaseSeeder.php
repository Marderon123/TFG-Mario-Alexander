<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password"),
            "usertype" => "administrador",
        ]);

        Post::factory(40)->create();
    }
}

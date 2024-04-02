<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Post seeders
        \App\Models\Post::factory(10)->create();

    }
}

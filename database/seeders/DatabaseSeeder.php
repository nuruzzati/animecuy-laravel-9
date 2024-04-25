<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Anime;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::factory(10)->create();
    //   Anime::factory(12)->create();

       Category::create([
            'kategori' => 'action',
        ]);
       Category::create([
            'kategori' => 'horror',
        ]);
       Category::create([
            'kategori' => 'romance',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;
use App\Models\Categorie;
use App\Models\Book;
use App\Models\Book_categorie;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(BooksSeeder::class);
        Publisher::factory(3)->create();
        Categorie::factory(4)->create();
        Book::factory(4)->create();
        Book_categorie::factory(8)->create();
    }
}

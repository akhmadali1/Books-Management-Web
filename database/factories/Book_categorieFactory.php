<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Book_categorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'book_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,4)
        ];
    }
}

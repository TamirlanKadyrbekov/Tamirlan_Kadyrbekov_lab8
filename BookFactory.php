<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Provider\Base;
use Faker\Provider\en_US\Company;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
             'title'=>$this->faker->jobTitle,
            'genre'=>$this->faker->name,
            'author'=>$this->faker->name,
            'rating'=>$this->faker->randomDigit,
        ];
    }
}

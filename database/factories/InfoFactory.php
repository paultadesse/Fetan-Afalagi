<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Info::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => $this->faker->numerify('##########'),
            'address' => $this->faker->word,
            'pobox' => $this->faker->word,
            'fax' => $this->faker->word,
            'email' => $this->faker->email,
            'about' => $this->faker->sentence,
            'category_id' => Category::where('id', rand(1, 5))->first()
        ];
    }
}

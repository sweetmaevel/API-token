<?php

namespace Database\Factories;

use App\Models\customizedcake;
use Illuminate\Database\Eloquent\Factories\Factory;

class customizedcakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = customizedcake::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'design' => $this->faker->word,
        'flavor' => $this->faker->word,
        'details' => $this->faker->word,
        'size' => $this->faker->word,
        'prize' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

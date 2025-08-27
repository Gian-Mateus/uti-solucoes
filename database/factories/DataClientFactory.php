<?php

namespace Database\Factories;

use App\Models\DataClient;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataClient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ip_public' => $this->faker->ipv4,
        ];
    }
}
<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ClientUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClientUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'name' => $this->faker->name,
            'login' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(10),
        ];
    }
}

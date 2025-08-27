<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\DataClient;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'cnpj-cpf' => $this->faker->numerify('############'), // Or generate a valid CNPJ/CPF format
            'zipcode' => $this->faker->postcode,
            'adress' => $this->faker->streetAddress,
            'number' => $this->faker->buildingNumber,
            'district' => $this->faker->citySuffix,
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'emails' => $this->faker->companyEmail,
            'phones' => $this->faker->phoneNumber,
            'data_id' => DataClient::factory(),
        ];
    }
}
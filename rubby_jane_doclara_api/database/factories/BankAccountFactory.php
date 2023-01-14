<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator;

$faker = Faker\Factory::create();


class BankAccountFactory extends Factory

{
    
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone_number' => $this->faker->phoneNumber,
            'bank_name' => $this->faker->company,
            'bank_account_number' => $this->faker->creditCardNumber,
            'bank_account_type' => $this->faker->creditCardType,
            'email' => $this->faker->email
            
        ];
    }
}

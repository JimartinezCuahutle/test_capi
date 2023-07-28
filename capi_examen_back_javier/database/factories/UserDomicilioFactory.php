<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Support\Str;

class UserDomicilioFactory extends Factory
{
    protected $model = UserDomicilio::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'domicilio' => $this->faker->streetAddress,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->citySuffix,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
        ];
    }
}

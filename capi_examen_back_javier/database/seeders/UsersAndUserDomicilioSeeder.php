<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersAndUserDomicilioSeeder extends Seeder
{
    public function run()
    {
        // Crear 100 usuarios con sus domicilios aleatorios
        User::factory()
            ->count(100)
            ->has(UserDomicilio::factory())
            ->create();
    }
}
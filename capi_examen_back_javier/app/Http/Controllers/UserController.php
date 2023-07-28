<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    // Otros métodos del controlador...

    public function getAllUsersWithDomicilios()
    {
        $usersWithDomicilios = User::with('userDomicilio')->get();

        // Transformar la colección en un array
        $usersArray = $usersWithDomicilios->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'fecha_nacimiento' => $user->fecha_nacimiento,
                'edad' => $user->fecha_nacimiento ? Carbon::parse($user->fecha_nacimiento)->age : null,
                'domicilio' => $user->userDomicilio ? [
                    'id' => $user->userDomicilio->id,
                    'user_id' => $user->userDomicilio->user_id,
                    'domicilio' => $user->userDomicilio->domicilio,
                    'numero_exterior' => $user->userDomicilio->numero_exterior,
                    'colonia' => $user->userDomicilio->colonia,
                    'cp' => $user->userDomicilio->cp,
                    'ciudad' => $user->userDomicilio->ciudad,
                ] : null,
            ];
        })->toArray();

        return response()->json($usersArray);
    }
}

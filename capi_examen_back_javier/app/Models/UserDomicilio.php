<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    protected $table = 'user_domicilio';
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

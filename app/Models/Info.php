<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_number',
        'phone',
        'address',
        'user_id',
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User::class', 'user_id', 'id');
    }
}

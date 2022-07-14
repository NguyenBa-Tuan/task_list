<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cate_name',
        'cate_slug',
    ];

    public function post(){
        return $this->hasMany('App\Models\Post', 'cate_id', 'id');
    }
}

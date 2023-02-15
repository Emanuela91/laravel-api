<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' => fake()->words(rand(1, 3), true),
        'year' => fake()->year(),
        'cashOut' => fake()->boolean(),
    ];
}
<?php

namespace App\Models;

use App\Enums\State;
use App\Enums\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'state',
    ];

    protected $casts = [
        'state' => State::class,
        'type' => Type::class,
    ];
}

<?php

namespace App\Models;

use App\Enums\State;
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
    ];
}

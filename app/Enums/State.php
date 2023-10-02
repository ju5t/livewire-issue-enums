<?php

namespace App\Enums;

enum State: string
{
    case Pending = 'pending';
    case Published = 'published';
}

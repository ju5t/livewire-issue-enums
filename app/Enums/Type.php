<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self Article()
 * @method static self Knowledgebase()
 */
class Type extends Enum
{
    protected static function labels(): array
    {
        return [
            'Article' => 'This is a normal Article',
            'Knowledgebase' => 'This is a Knowledgebase Article',
        ];
    }
}

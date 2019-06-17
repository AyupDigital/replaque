<?php

namespace App\Docs\SecuritySchemes;

use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;

class ApiTokenSecurityScheme extends SecurityScheme
{
    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme
     */
    public static function create(string $objectId = null): SecurityScheme
    {
        return parent::create('ApiToken')
            ->type(static::TYPE_API_KEY)
            ->description('API Token')
            ->name('token')
            ->in(static::IN_QUERY);
    }
}

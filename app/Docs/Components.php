<?php

namespace App\Docs;

use App\Docs\SecuritySchemes\ApiTokenSecurityScheme;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Components as BaseComponents;

class Components extends BaseComponents
{
    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Components
     */
    public static function create(string $objectId = null): BaseComponents
    {
        return parent::create($objectId)
            ->securitySchemes(ApiTokenSecurityScheme::create());
    }
}

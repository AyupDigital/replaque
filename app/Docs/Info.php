<?php

declare(strict_types=1);

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Info as BaseInfo;

class Info extends BaseInfo
{
    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Info
     */
    public static function create(string $objectId = null): BaseInfo
    {
        return parent::create($objectId)
            ->title(config('app.name') . ' API')
            ->description('Documentation on how to use the API')
            ->version('v1');
    }
}

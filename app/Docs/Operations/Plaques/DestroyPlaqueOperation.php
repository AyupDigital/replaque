<?php

namespace App\Docs\Operations\Plaques;

use App\Docs\Responses\ResourceDeletedResponse;
use App\Docs\Tags\PlaquesTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;

class DestroyPlaqueOperation extends Operation
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    public static function create(string $objectId = null): Operation
    {
        return parent::create($objectId)
            ->action(static::ACTION_DELETE)
            ->summary('Delete a specific plaque')
            ->tags(PlaquesTag::create())
            ->responses(
                ResourceDeletedResponse::create(null, 'plaque')
            );
    }
}

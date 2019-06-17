<?php

namespace App\Docs\Operations\Plaques;

use App\Docs\Schemas\Plaque\PlaqueSchema;
use App\Docs\Schemas\ResourceSchema;
use App\Docs\Tags\PlaquesTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;

class ShowPlaqueOperation extends Operation
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    public static function create(string $objectId = null): Operation
    {
        return parent::create($objectId)
            ->action(static::ACTION_GET)
            ->summary('Get a specific plaque')
            ->tags(PlaquesTag::create())
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        ResourceSchema::create(null, PlaqueSchema::create())
                    )
                )
            );
    }
}

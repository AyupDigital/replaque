<?php

namespace App\Docs\Operations\Plaques;

use App\Docs\Schemas\Plaque\PlaqueSchema;
use App\Docs\Schemas\Plaque\StorePlaqueSchema;
use App\Docs\Schemas\ResourceSchema;
use App\Docs\Tags\PlaquesTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;

class StorePlaqueOperation extends Operation
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    public static function create(string $objectId = null): Operation
    {
        return parent::create($objectId)
            ->action(static::ACTION_POST)
            ->summary('Create a plaque')
            ->tags(PlaquesTag::create())
            ->requestBody(
                RequestBody::create()->content(
                    MediaType::json()->schema(StorePlaqueSchema::create())
                )
            )
            ->responses(
                Response::created()->content(
                    MediaType::json()->schema(
                        ResourceSchema::create(null, PlaqueSchema::create())
                    )
                )
            );
    }
}

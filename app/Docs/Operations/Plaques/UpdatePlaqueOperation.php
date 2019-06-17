<?php

namespace App\Docs\Operations\Plaques;

use App\Docs\Schemas\Plaque\PlaqueSchema;
use App\Docs\Schemas\Plaque\UpdatePlaqueSchema;
use App\Docs\Schemas\ResourceSchema;
use App\Docs\Tags\PlaquesTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;

class UpdatePlaqueOperation extends Operation
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    public static function create(string $objectId = null): Operation
    {
        return parent::create($objectId)
            ->action(static::ACTION_PUT)
            ->summary('Update a specific plaque')
            ->tags(PlaquesTag::create())
            ->requestBody(
                RequestBody::create()->content(
                    MediaType::json()->schema(UpdatePlaqueSchema::create())
                )
            )
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        ResourceSchema::create(null, PlaqueSchema::create())
                    )
                )
            );
    }
}

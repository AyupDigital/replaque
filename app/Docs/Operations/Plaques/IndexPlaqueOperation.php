<?php

namespace App\Docs\Operations\Plaques;

use App\Docs\Parameters\FilterParameter;
use App\Docs\Parameters\PageParameter;
use App\Docs\Parameters\PerPageParameter;
use App\Docs\Parameters\SortParameter;
use App\Docs\Schemas\PaginationSchema;
use App\Docs\Schemas\Plaque\PlaqueSchema;
use App\Docs\Tags\PlaquesTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class IndexPlaqueOperation extends Operation
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
            ->summary('List all plaques')
            ->tags(PlaquesTag::create())
            ->noSecurity()
            ->parameters(
                PageParameter::create(),
                PerPageParameter::create(),
                FilterParameter::create(null, 'name')
                    ->description('The name of the Plaque to filter by')
                    ->schema(Schema::string()),
                SortParameter::create(null, ['name', 'date_unveiled'], 'name')
            )
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        PaginationSchema::create(null, PlaqueSchema::create())
                    )
                )
            );
    }
}

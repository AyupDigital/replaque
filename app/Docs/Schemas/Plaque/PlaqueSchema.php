<?php

namespace App\Docs\Schemas\Plaque;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class PlaqueSchema extends Schema
{
    /**
     * @param string|null $objectId
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Schema
     */
    public static function create(string $objectId = null): Schema
    {
        return parent::create($objectId)
            ->type(static::TYPE_OBJECT)
            ->properties(
                Schema::integer('id'),
                Schema::string('name'),
                Schema::string('address_line_1'),
                Schema::string('address_line_2')->nullable(),
                Schema::string('address_line_3')->nullable(),
                Schema::string('city'),
                Schema::string('postcode'),
                Schema::number('lat')->nullable(),
                Schema::number('lng')->nullable(),
                Schema::string('unveiler'),
                Schema::string('date_unveiled')->format(Schema::FORMAT_DATE),
                Schema::string('sponsor'),
                Schema::string('comments')->nullable(),
                Schema::string('created_at')->format(Schema::FORMAT_DATE_TIME),
                Schema::string('updated_at')->format(Schema::FORMAT_DATE_TIME)
            );
    }
}

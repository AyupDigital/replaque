<?php

namespace App\Docs\Schemas\Plaque;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class StorePlaqueSchema extends Schema
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Schema
     */
    public static function create(string $objectId = null): Schema
    {
        return parent::create($objectId)
            ->type(static::TYPE_OBJECT)
            ->required(
                'name',
                'address_line_1',
                'city',
                'postcode',
                'unveiler',
                'date_unveiled',
                'sponsor'
            )
            ->properties(
                Schema::string('name'),
                Schema::string('address_line_1'),
                Schema::string('address_line_2'),
                Schema::string('address_line_3'),
                Schema::string('city'),
                Schema::string('postcode'),
                Schema::number('lat'),
                Schema::number('lng'),
                Schema::string('unveiler'),
                Schema::string('date_unveiled')->format(Schema::FORMAT_DATE),
                Schema::string('sponsor'),
                Schema::string('comments')
            );
    }
}

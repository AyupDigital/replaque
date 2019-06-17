<?php

namespace App\Docs\Schemas\Ticket;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class StoreTicketSchema extends Schema
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
                'plaque_id',
                'name',
                'description'
            )
            ->properties(
                Schema::integer('plaque_id'),
                Schema::string('name'),
                Schema::string('description')
            );
    }
}

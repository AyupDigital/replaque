<?php

namespace App\Docs\Schemas\Ticket;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class UpdateTicketSchema extends Schema
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
                Schema::integer('plaque_id'),
                Schema::string('name'),
                Schema::string('description')
            );
    }
}

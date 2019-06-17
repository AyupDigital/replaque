<?php

namespace App\Docs\Schemas\Ticket;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class TicketSchema extends Schema
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
                Schema::integer('plaque_id'),
                Schema::string('name'),
                Schema::string('description'),
                Schema::string('created_at')->format(Schema::FORMAT_DATE_TIME),
                Schema::string('updated_at')->format(Schema::FORMAT_DATE_TIME),
                Schema::string('closed_at')->format(Schema::FORMAT_DATE_TIME)->nullable()
            );
    }
}

<?php

namespace App\Docs\Operations\Tickets;

use App\Docs\Schemas\ResourceSchema;
use App\Docs\Schemas\Ticket\TicketSchema;
use App\Docs\Tags\TicketsTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;

class ShowTicketOperation extends Operation
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
            ->summary('Get a specific ticket')
            ->tags(TicketsTag::create())
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        ResourceSchema::create(null, TicketSchema::create())
                    )
                )
            );
    }
}

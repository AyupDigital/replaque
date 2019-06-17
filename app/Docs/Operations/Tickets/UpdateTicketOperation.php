<?php

namespace App\Docs\Operations\Tickets;

use App\Docs\Schemas\ResourceSchema;
use App\Docs\Schemas\Ticket\TicketSchema;
use App\Docs\Schemas\Ticket\UpdateTicketSchema;
use App\Docs\Tags\TicketsTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;

class UpdateTicketOperation extends Operation
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
            ->summary('Update a specific ticket')
            ->tags(TicketsTag::create())
            ->requestBody(
                RequestBody::create()->content(
                    MediaType::json()->schema(UpdateTicketSchema::create())
                )
            )
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        ResourceSchema::create(null, TicketSchema::create())
                    )
                )
            );
    }
}

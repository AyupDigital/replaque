<?php

namespace App\Docs\Operations\Tickets;

use App\Docs\Parameters\FilterParameter;
use App\Docs\Parameters\PageParameter;
use App\Docs\Parameters\PerPageParameter;
use App\Docs\Parameters\SortParameter;
use App\Docs\Schemas\PaginationSchema;
use App\Docs\Schemas\Ticket\TicketSchema;
use App\Docs\Tags\TicketsTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class IndexTicketOperation extends Operation
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
            ->summary('List all tickets')
            ->tags(TicketsTag::create())
            ->parameters(
                PageParameter::create(),
                PerPageParameter::create(),
                FilterParameter::create(null, 'plaque_id')
                    ->description('The ID of the Plaque to filter the Tickets by')
                    ->schema(Schema::string()->format(Schema::FORMAT_UUID)),
                FilterParameter::create(null, 'status')
                    ->description('The status of the Ticket to filter by')
                    ->schema(Schema::string()->enum('open', 'closed')),
                SortParameter::create(null, ['created_at', 'closed_at'], 'created_at')
            )
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        PaginationSchema::create(null, TicketSchema::create())
                    )
                )
            );
    }
}

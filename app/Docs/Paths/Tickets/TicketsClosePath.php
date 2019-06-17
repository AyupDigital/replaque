<?php

namespace App\Docs\Paths\Tickets;

use App\Docs\Operations\Tickets\CloseTicketOperation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class TicketsClosePath extends PathItem
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): PathItem
    {
        return parent::create($objectId)
            ->route('/tickets/{ticket}/close')
            ->parameters(
                Parameter::path()
                    ->name('ticket')
                    ->description('The ID of the ticket')
                    ->schema(Schema::integer())
                    ->required()
            )
            ->operations(
                CloseTicketOperation::create()
            );
    }
}

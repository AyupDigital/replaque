<?php

namespace App\Docs\Paths\Tickets;

use App\Docs\Operations\Tickets\DestroyTicketOperation;
use App\Docs\Operations\Tickets\ShowTicketOperation;
use App\Docs\Operations\Tickets\UpdateTicketOperation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class TicketsNestedPath extends PathItem
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): PathItem
    {
        return parent::create($objectId)
            ->route('/tickets/{ticket}')
            ->parameters(
                Parameter::path()
                    ->name('ticket')
                    ->description('The ID of the ticket')
                    ->schema(Schema::integer())
                    ->required()
            )
            ->operations(
                ShowTicketOperation::create(),
                UpdateTicketOperation::create(),
                DestroyTicketOperation::create()
            );
    }
}

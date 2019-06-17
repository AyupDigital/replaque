<?php

namespace App\Docs\Paths\Tickets;

use App\Docs\Operations\Tickets\IndexTicketOperation;
use App\Docs\Operations\Tickets\StoreTicketOperation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;

class TicketsRootPath extends PathItem
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): PathItem
    {
        return parent::create($objectId)
            ->route('/tickets')
            ->operations(
                IndexTicketOperation::create(),
                StoreTicketOperation::create()
            );
    }
}

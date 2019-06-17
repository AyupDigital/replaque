<?php

namespace App\Docs\Operations\Tickets;

use App\Docs\Responses\ResourceDeletedResponse;
use App\Docs\Tags\TicketsTag;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;

class DestroyTicketOperation extends Operation
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    public static function create(string $objectId = null): Operation
    {
        return parent::create($objectId)
            ->action(static::ACTION_DELETE)
            ->summary('Delete a specific ticket')
            ->tags(TicketsTag::create())
            ->responses(
                ResourceDeletedResponse::create(null, 'ticket')
            );
    }
}

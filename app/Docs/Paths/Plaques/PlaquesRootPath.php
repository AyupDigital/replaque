<?php

namespace App\Docs\Paths\Plaques;

use App\Docs\Operations\Plaques\IndexPlaqueOperation;
use App\Docs\Operations\Plaques\StorePlaqueOperation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;

class PlaquesRootPath extends PathItem
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): PathItem
    {
        return parent::create($objectId)
            ->route('/plaques')
            ->operations(
                IndexPlaqueOperation::create(),
                StorePlaqueOperation::create()
            );
    }
}

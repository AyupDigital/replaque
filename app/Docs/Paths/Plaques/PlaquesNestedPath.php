<?php

namespace App\Docs\Paths\Plaques;

use App\Docs\Operations\Plaques\DestroyPlaqueOperation;
use App\Docs\Operations\Plaques\ShowPlaqueOperation;
use App\Docs\Operations\Plaques\UpdatePlaqueOperation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class PlaquesNestedPath extends PathItem
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem
     */
    public static function create(string $objectId = null): PathItem
    {
        return parent::create($objectId)
            ->route('/plaques/{plaque}')
            ->parameters(
                Parameter::path()
                    ->name('plaque')
                    ->description('The ID of the plaque')
                    ->schema(Schema::integer())
                    ->required()
            )
            ->operations(
                ShowPlaqueOperation::create(),
                UpdatePlaqueOperation::create(),
                DestroyPlaqueOperation::create()
            );
    }
}

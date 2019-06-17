<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class Pagination
{
    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter[]
     */
    public static function parameters()
    {
        return [
            Parameter::query()
                ->name('page')
                ->description('The current page of pagination.')
                ->schema(Schema::integer()),
            Parameter::query()
                ->name('per_page')
                ->description('The number of results to return in a paginated set.')
                ->schema(Schema::integer()->default(15)),
        ];
    }
}

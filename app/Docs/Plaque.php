<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class Plaque
{
    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Schema
     */
    public static function schema()
    {
        return Schema::object()
            ->properties(
                Schema::string('id')->format(Schema::FORMAT_UUID),
                Schema::string('name'),
                Schema::string('address_line_1'),
                Schema::string('address_line_2')->nullable(),
                Schema::string('address_line_3')->nullable(),
                Schema::string('city'),
                Schema::string('postcode'),
                Schema::number('lat'),
                Schema::number('lng'),
                Schema::string('unveiler'),
                Schema::string('date_unveiled')->format(Schema::FORMAT_DATE),
                Schema::string('sponsor'),
                Schema::string('comments')->nullable(),
                Schema::string('created_at')->format(Schema::FORMAT_DATE_TIME),
                Schema::string('updated_at')->format(Schema::FORMAT_DATE_TIME)
            );
    }
}

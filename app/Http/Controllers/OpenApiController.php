<?php

namespace App\Http\Controllers;

use App\Docs\OpenApi;

class OpenApiController extends Controller
{
    /**
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\OpenApi
     */
    public function __invoke()
    {
        return OpenApi::create();
    }
}

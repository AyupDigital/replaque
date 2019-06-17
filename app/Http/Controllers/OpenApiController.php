<?php

namespace App\Http\Controllers;

use App\Docs\OpenApi;

class OpenApiController extends Controller
{
    /**
     * @param \App\Docs\OpenApi $openApi
     * @return \App\Docs\OpenApi
     */
    public function __invoke(OpenApi $openApi)
    {
        return $openApi;
    }
}

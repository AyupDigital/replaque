<?php

declare(strict_types=1);

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\OpenApi as OpenApiObject;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;

class OpenApi implements Responsable
{
    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\OpenApi
     */
    protected $openApi;

    /**
     * OpenApi constructor.
     */
    public function __construct()
    {
        $this->openApi = OpenApiObject::create();
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return response()->json(
            $this->openApi->toArray(),
            Response::HTTP_OK,
            [
                'Content-Disposition' => 'inline; filename="openapi.json"',
                'Content-Type' => 'application/json; charset=utf-8',
            ]
        );
    }
}

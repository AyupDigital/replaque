<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\OpenApi as BaseOpenApi;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class OpenApi extends BaseOpenApi implements Responsable
{
    /**
     * @param string|null $objectId
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\OpenApi
     */
    public static function create(string $objectId = null): BaseOpenApi
    {
        return parent::create($objectId)
            ->openapi(static::OPENAPI_3_0_2)
            ->info(Info::create())
            ->servers(Server::create())
            ->paths(
                Paths\Plaques\PlaquesRootPath::create(),
                Paths\Plaques\PlaquesNestedPath::create(),
                Paths\Tickets\TicketsRootPath::create(),
                Paths\Tickets\TicketsNestedPath::create()
            )
            ->components(Components::create())
            ->security(SecurityRequirement::create())
            ->tags(
                Tags\PlaquesTag::create(),
                Tags\TicketsTag::create()
            );
    }

    /**
     * Create an HTTP response that represents the object.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function toResponse($request): JsonResponse
    {
        return response()->json(
            $this->toArray(),
            Response::HTTP_OK,
            [
                'Content-Disposition' => 'inline; filename="openapi.json"',
                'Content-Type' => 'application/json; charset=utf-8',
            ]
        );
    }
}

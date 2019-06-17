<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Components;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Info;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Parameter;
use GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityRequirement;
use GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityScheme;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Server;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Tag;
use GoldSpecDigital\ObjectOrientedOAS\OpenApi as OpenApiObject;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;

class OpenApi implements Responsable
{
    /**
     * @var \App\Docs\PlaqueOperations
     */
    protected $plaqueOperations;

    /**
     * @var \App\Docs\TicketOperations
     */
    protected $ticketOperations;

    /**
     * @var \GoldSpecDigital\ObjectOrientedOAS\OpenApi
     */
    protected $openApi;

    /**
     * OpenApi constructor.
     *
     * @param \App\Docs\PlaqueOperations $plaqueOperations
     * @param \App\Docs\TicketOperations $ticketOperations
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     */
    public function __construct(
        PlaqueOperations $plaqueOperations,
        TicketOperations $ticketOperations
    ) {
        $this->plaqueOperations = $plaqueOperations;
        $this->ticketOperations = $ticketOperations;
        $this->openApi = OpenApiObject::create()
            ->openapi(OpenApiObject::OPENAPI_3_0_2)
            ->info($this->getInfo())
            ->servers($this->getServer())
            ->paths(...$this->getPaths())
            ->components($this->getComponents())
            ->security($this->getSecurity())
            ->tags(...$this->getTags());
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

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Info
     */
    protected function getInfo()
    {
        return Info::create()
            ->title(config('app.name') . ' API Docs')
            ->description('Documentation for consuming the API.')
            ->version('v1');
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Server
     */
    protected function getServer()
    {
        return Server::create()
            ->url(url('/v1'));
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\PathItem[]
     */
    protected function getPaths()
    {
        return [
            PathItem::create()
                ->route('/plaques')
                ->operations(...$this->plaqueOperations->root()),
            PathItem::create()
                ->route('/plaques/{plaque}')
                ->parameters(
                    Parameter::path()
                        ->name('plaque')
                        ->description('The ID of the plaque.')
                        ->required()
                        ->schema(Schema::string()->format(Schema::FORMAT_UUID))
                )
                ->operations(...$this->plaqueOperations->nested()),
            PathItem::create()
                ->route('/tickets')
                ->operations(...$this->ticketOperations->root()),
            PathItem::create()
                ->route('/tickets/{ticket}')
                ->parameters(
                    Parameter::path()
                        ->name('ticket')
                        ->description('The ID of the ticket.')
                        ->required()
                        ->schema(Schema::string()->format(Schema::FORMAT_UUID))
                )
                ->operations(...$this->ticketOperations->nested()),
        ];
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Components
     */
    protected function getComponents()
    {
        return Components::create()
            ->securitySchemes(
                SecurityScheme::create('ApiToken')
                    ->type(SecurityScheme::TYPE_API_KEY)
                    ->description('API Token')
                    ->name('token')
                    ->in(SecurityScheme::IN_QUERY)
            );
    }

    /**
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\SecurityRequirement
     */
    protected function getSecurity()
    {
        return SecurityRequirement::create()
            ->securityScheme('ApiToken');
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Tag[]
     */
    protected function getTags()
    {
        return [
            Tag::create()->name('Plaques'),
            Tag::create()->name('Tickets'),
        ];
    }
}

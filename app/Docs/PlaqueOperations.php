<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;

class PlaqueOperations
{
    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[]
     */
    public function root()
    {
        return [
            $this->index(),
            $this->store(),
        ];
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation[]
     */
    public function nested()
    {
        return [
            $this->show(),
            $this->update(),
            $this->destroy(),
        ];
    }

    /**
     * @throws \GoldSpecDigital\ObjectOrientedOAS\Exceptions\InvalidArgumentException
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function index()
    {
        return Operation::get()
            ->tags('Plaques')
            ->summary('List all plaques.')
            ->noSecurity()
            ->parameters(...Pagination::parameters())
            ->responses(
                Response::ok()->content(
                    MediaType::json()->schema(
                        Schema::array()->items(
                            Plaque::schema('data')
                        )
                    )
                )
            );
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function store()
    {
        return Operation::post();
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function show()
    {
        return Operation::get();
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function update()
    {
        return Operation::put();
    }

    /**
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function destroy()
    {
        return Operation::delete();
    }
}

<?php

namespace App\Docs;

use GoldSpecDigital\ObjectOrientedOAS\Objects\Operation;

class TicketOperations
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
     * @return \GoldSpecDigital\ObjectOrientedOAS\Objects\Operation
     */
    protected function index()
    {
        return Operation::get();
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

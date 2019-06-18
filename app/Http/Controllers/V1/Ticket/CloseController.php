<?php

namespace App\Http\Controllers\V1\Ticket;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CloseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Authentication required for this endpoint.
        $this->middleware('api');

        // TODO: Validate the request.
        // https://laravel.com/docs/5.8/validation#quick-writing-the-validation-logic

        // TODO: Update the Plaque record in the database.
        // https://laravel.com/docs/5.8/eloquent#inserting-and-updating-models

        // TODO: Return a JSON response of the Plaque.
        // https://laravel.com/docs/5.8/eloquent-resources#writing-resources
    }
}

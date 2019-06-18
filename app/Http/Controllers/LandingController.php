<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('landing');
    }
}

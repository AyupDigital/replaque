<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('plaques', 'V1\\PlaqueController');
Route::apiResource('tickets', 'V1\\TicketController');
Route::put('tickets/{ticket}/close', 'V1\\Ticket\\CloseController');

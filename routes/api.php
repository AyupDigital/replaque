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

Route::get('openapi.json', 'OpenApiController')
    ->name('openapi.json');

Route::get('docs', 'DocsController')
    ->name('docs');

Route::apiResource('v1/plaques', 'V1\\PlaqueController');
Route::apiResource('v1/tickets', 'V1\\TicketController');
Route::put('v1/tickets/{ticket}/close', 'V1\\Ticket\\CloseController');

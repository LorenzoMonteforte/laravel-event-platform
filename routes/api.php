<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\SingleEventController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/api", function(){
    return response()->json([
        "name" => "Lorenzo",
        "surname" => "Monteforte",
        "date_of_birth" => "1999-11-02"
    ]);
});

Route::get("/api2", [EventController::class, "index"]);

Route::get("/api2/{id}", [SingleEventController::class, "index"]);

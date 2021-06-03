<?php

use App\Http\Controllers\SecaoController;
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
Route::prefix('secao')->group(function (){

    //Pegar todas as secoes
    Route::get('/', [SecaoController::class, 'index']);

    Route::get('/{secao}',[SecaoController::class, 'show']);

    Route::post('/',[SecaoController::class, 'store']);

    Route::put('/{secao}',[SecaoController::class, 'update']);

    Route::delete('/{secao}',[SecaoController::class, 'destroy']);

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

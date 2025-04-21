<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\BarbeiroController;
use App\Http\Controllers\ServicoController;
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

Route::get('/servicos', [ServicoController::class, 'index']);
Route::get('/barbeiros', [BarbeiroController::class, 'index']);

Route::get('/horarios-disponiveis', [AgendamentoController::class, 'horariosDisponiveis']);

Route::post('/agendamentos', [AgendamentoController::class, 'store']);
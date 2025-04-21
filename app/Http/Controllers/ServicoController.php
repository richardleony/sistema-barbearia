<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\JsonResponse;

class ServicoController extends Controller
{
    /**
     * Display a listing of the services.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $servicos = Servico::all();
        return response()->json($servicos);
    }
}
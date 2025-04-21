<?php

namespace App\Http\Controllers;

use App\Models\Barbeiro;
use Illuminate\Http\JsonResponse;

class BarbeiroController extends Controller
{
    /**
     * Display a listing of the barbers.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $barbeiros = Barbeiro::all();
        return response()->json($barbeiros);
    }
}
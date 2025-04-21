<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Barbeiro;
use App\Models\Servico;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Podemos implementar a listagem de agendamentos mais tarde, se necessário
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Não vamos ter um formulário no backend da API
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validação dos dados da requisição
    $request->validate([
        'cliente_id' => 'required|exists:clientes,id',
        'barbeiro_id' => 'required|exists:barbeiros,id',
        'servico_id' => 'required|exists:servicos,id',
        'data_hora' => 'required|date_format:Y-m-d H:i',
    ]);

    // Cria um novo agendamento com os dados da requisição
    $agendamento = Agendamento::create($request->all());

    // Retorna uma resposta de sucesso com o agendamento criado
    return response()->json(['message' => 'Agendamento criado com sucesso', 'agendamento' => $agendamento], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        // Podemos implementar a visualização de um agendamento específico mais tarde
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        // Não vamos ter um formulário no backend da API
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        // Podemos implementar a atualização de um agendamento mais tarde, se necessário
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        // Podemos implementar a exclusão de um agendamento mais tarde, se necessário
    }

    /**
     * Busca os horários disponíveis para um serviço, barbeiro e data específicos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function horariosDisponiveis(Request $request): JsonResponse
    {
        // Por enquanto, vamos apenas retornar os parâmetros da requisição
        return response()->json(['message' => 'Horários disponíveis', 'params' => $request->all()]);
    }
}
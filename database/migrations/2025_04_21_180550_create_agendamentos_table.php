<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes'); // Chave estrangeira para a tabela 'clientes'
            $table->foreignId('barbeiro_id')->constrained('barbeiros'); // Chave estrangeira para a tabela 'barbeiros'
            $table->foreignId('servico_id')->constrained('servicos'); // Chave estrangeira para a tabela 'servicos'
            $table->dateTime('data_hora'); // Data e hora do agendamento
            $table->string('status')->default('Agendado'); // Status do agendamento (padrão: 'Agendado')
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
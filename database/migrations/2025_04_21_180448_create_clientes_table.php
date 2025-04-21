<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' como chave primária auto-incrementável
            $table->string('nome'); // Coluna para o nome do cliente (texto)
            $table->string('telefone'); // Coluna para o telefone do cliente (texto)
            $table->string('email')->nullable(); // Coluna para o email do cliente (texto, pode ser nulo)
            $table->timestamps(); // Cria colunas 'created_at' e 'updated_at' para rastrear a criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes'); // Método para desfazer a criação da tabela
    }
}

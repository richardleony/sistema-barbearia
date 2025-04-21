<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(['nome' => 'João Silva', 'telefone' => '21999999999', 'email' => 'joao@email.com']);
        Cliente::create(['nome' => 'Maria Oliveira', 'telefone' => '21888888888', 'email' => 'maria@email.com']);
        // Adiciona mais clientes de exemplo se quiseres
    }
}

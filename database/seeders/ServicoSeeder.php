<?php

namespace Database\Seeders;

use App\Models\Servico;
use Illuminate\Database\Seeder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servico::create(['nome' => 'Corte de Cabelo', 'duracao' => 30, 'preco' => 50.00]);
        Servico::create(['nome' => 'Barba Completa', 'duracao' => 20, 'preco' => 40.00]);
        Servico::create(['nome' => 'Corte e Barba', 'duracao' => 50, 'preco' => 80.00]);
        // Adiciona mais serviços de exemplo se quiseres
    }
}

<?php

namespace Database\Seeders;

use App\Models\Barbeiro;
use Illuminate\Database\Seeder;

class BarbeiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barbeiro::create(['nome' => 'Carlos Pereira', 'especialidade' => 'Cortes Modernos']);
        Barbeiro::create(['nome' => 'Ana Souza', 'especialidade' => 'Barba e Bigode']);
        // Adiciona mais barbeiros de exemplo se quiseres
    }
}

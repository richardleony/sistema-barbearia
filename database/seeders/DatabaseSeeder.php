<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClienteSeeder::class);
        $this->call(BarbeiroSeeder::class);
        $this->call(ServicoSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
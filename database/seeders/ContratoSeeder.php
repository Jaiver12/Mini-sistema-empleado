<?php

namespace Database\Seeders;

use App\Models\TipoContrato;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoContrato::create([
            'name'=> 'fijo',
        ]);

        TipoContrato::create([
            'name'=> 'Obra labor',
        ]);
    }
}

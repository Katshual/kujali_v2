<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('prestations')->insert([
            ['nom' => 'Massage relaxant', 'description' => 'Composé de techniques californiennes, basée sur des manoeuvres enveloppantes, profondes et lentes, ce massage permet une détente du corps et de l\'esprit.'],
            ['nom' => 'Massage sportif', 'description' => 'Composé de techniques suédoises, ce massage a une action à la fois décontractée, drainante, et fortifiante. Il procure une grande détente musculaire et favorise une meilleure amplitude de mouvements.'],
        ]);
    }
}

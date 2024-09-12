<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tarifs')->insert([
            ['titre' => 'Massage relaxant', 'prix' => 70.00],
            ['titre' => 'Massage sportif', 'prix' => 70.00],
        ]);
    }
}

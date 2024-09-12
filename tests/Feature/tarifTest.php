<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class tarifTest extends TestCase
{
    use RefreshDatabase;

    /**@test */
    public function creation_d_un_tarif()
    {
        $tarif = Tarif::create([
            'titre' => 'Massage relaxant 30 minutes',
            'prix' => 40.00,
        ]);

        $this->assertDatabaseHas('tarifs', [
            'titre' => 'Massage relaxant 30 minutes',
            'prix' => 40.00,
        ]);
    }
}

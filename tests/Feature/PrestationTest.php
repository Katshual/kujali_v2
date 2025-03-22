<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrestationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_update_a_prestation()
    {
        $prestation = Prestation::factory()->create([
            'nom' => 'Massage',
            'description' => 'Massage relaxant',
        ]);

        $this->put(route('prestations.update', $prestation), [
            'nom' => 'Massage Energétique',
            'description' => 'Revitalisant',
        ]);

        $this->assertDatabaseHas('prestations', [
            'nom' => 'Massage Energétique',
            'description' => 'Revitalisant',
        ]);
    }}

<?php

namespace Tests\Feature;

use App\Models\Region;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegionControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the index method.
     *
     * @return void
     */
    public function testIndex()
    {
        // Create a new region
        $region = Region::factory()->create();

        // Call the index method
        $response = $this->get('/regions');

        // Assert that the response status is 200
        $response->assertStatus(200);

        // Assert that the view contains the region data
        $response->assertViewHas('regions', function($regions) use ($region) {
            return $regions->contains($region);
        });
    }
}
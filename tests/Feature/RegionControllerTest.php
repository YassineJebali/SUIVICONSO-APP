<?php
namespace Tests\Feature;

use App\Models\Region;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $region = Region::factory()->create();
        $response = $this->get(route('regions.index'));
        $response->assertStatus(200);
        $response->assertSee($region->name);
    }

    public function testCreate()
    {
        $response = $this->get(route('regions.create'));
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $regionData = Region::factory()->make()->toArray();
        $response = $this->post(route('regions.store'), $regionData);
        $response->assertRedirect(route('regions.index'));
        $this->assertDatabaseHas('regions', $regionData);
    }

    public function testShow()
    {
        $region = Region::factory()->create();
        $response = $this->get(route('regions.show', $region));
        $response->assertStatus(200);
        $response->assertSee($region->name);
    }

    public function testEdit()
    {
        $region = Region::factory()->create();
        $response = $this->get(route('regions.edit', $region));
        $response->assertStatus(200);
        $response->assertSee($region->name);
    }

    public function testUpdate()
    {
        $region = Region::factory()->create();
        $newRegionData = Region::factory()->make()->toArray();
        $response = $this->put(route('regions.update', $region), $newRegionData);
        $response->assertRedirect(route('regions.index'));
        $this->assertDatabaseHas('regions', $newRegionData);
    }

    public function testDestroy()
    {
        $region = Region::factory()->create();
        $response = $this->delete(route('regions.destroy', $region));
        $response->assertRedirect(route('regions.index'));
        $this->assertDatabaseMissing('regions', ['id' => $region->id]);
    }
}
?>
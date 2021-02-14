<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Pets;

class PetsTest extends TestCase
{
    /** @test */
    public function lista_pets()
    {
        $response = $this->get('/api/pets/');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_pets()
    {
       $pets = factory(Pets::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Luke', $encoding = 'UTF-8'),
            'especie' => $this->faker->shuffleString($string = 'C', $encoding = 'UTF-8'),
        ];
 
        $this->post('/api/pets/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_pets()
    {
        $pets = factory(Pets::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Luke', $encoding = 'UTF-8'),
            'especie' => $this->faker->shuffleString($string = 'C', $encoding = 'UTF-8'),
        ];
 
        $this->put('/api/pets/' . $pets->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_pets()
    {
        $pets = factory(Pets::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Luke', $encoding = 'UTF-8'),
            'especie' => $this->faker->shuffleString($string = 'C', $encoding = 'UTF-8'),
        ];
 
        $this->delete('/api/pets/' . $pets->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_pets()
    {
        $pets = factory(Pets::class)->create();
 
        $data = [
            'nome' => $this->faker->shuffleString($string = 'Luke', $encoding = 'UTF-8'),
            'especie' => $this->faker->shuffleString($string = 'C', $encoding = 'UTF-8'),
        ];
 
        $this->get('/api/pets/' . $pets->id, $data)->assertStatus(200);
     }
}

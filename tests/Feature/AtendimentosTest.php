<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Atendimentos;

class AtendimentosTest extends TestCase
{
    /** @test */
    public function lista_atendimentos()
    {
        $response = $this->get('/api/pets/');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_atendimentos()
    {
       $atendimentos = factory(Atendimentos::class)->create();
 
        $data = [
            'pets_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'data_atendimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descricao' => $this->faker->toLower($string = 'Em 03/01/2012, o pet Bolinha, tomou a primeira dose da vacina da gripe.'),
        ];
 
        $this->post('/api/atendimentos/', $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_update_atendimentos()
    {
        $atendimentos = factory(Atendimentos::class)->create();
 
        $data = [
            'pets_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'data_atendimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descricao' => $this->faker->toLower($string = 'Em 03/01/2012, o pet Bolinha, tomou a primeira dose da vacina da gripe.'),
        ];
 
        $this->put('/api/atendimentos/' . $atendimentos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_delete_atendimentos()
    {
        $atendimentos = factory(Atendimentos::class)->create();
 
        $data = [
            'pets_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'data_atendimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descricao' => $this->faker->toLower($string = 'Em 03/01/2012, o pet Bolinha, tomou a primeira dose da vacina da gripe.'),
        ];
 
        $this->delete('/api/atendimentos/' . $atendimentos->id, $data)->assertStatus(200);
    }
 
    /** @test */
    public function can_show_atendimentos()
    {
        $atendimentos = factory(Atendimentos::class)->create();
 
        $data = [
            'pets_id' => $this->faker->biasedNumberBetween($min = 0, $max = 10, $function = 'sqrt'),
            'data_atendimento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'descricao' => $this->faker->toLower($string = 'Em 03/01/2012, o pet Bolinha, tomou a primeira dose da vacina da gripe.'),
        ];
 
        $this->get('/api/atendimentos/' . $atendimentos->id, $data)->assertStatus(200);
     }
}

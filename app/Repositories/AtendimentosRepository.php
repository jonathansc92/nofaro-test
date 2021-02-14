<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class AtendimentosRepository extends BaseRepository 
{
    public function model()
    {
        return "App\\Atendimentos";
    }
}

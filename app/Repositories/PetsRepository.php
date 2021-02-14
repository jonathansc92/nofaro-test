<?php
namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class PetsRepository extends BaseRepository 
{
    public function model()
    {
        return "App\\Pets";
    }
}

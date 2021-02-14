<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimentos extends Model
{
    protected $table = 'atendimentos';
    protected $fillable = ['pets_id', 'data_atendimento', 'descricao', 'created_at', 'updated_at'];
}


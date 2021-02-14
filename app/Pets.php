<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    protected $table = 'pets';
    protected $fillable = ['nome', 'especie', 'created_at', 'updated_at'];
}


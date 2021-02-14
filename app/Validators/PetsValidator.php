<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class PetsValidator extends LaravelValidator 
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'nome' => 'required',
            'especie'  => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'nome' => 'required',
            'especie'  => 'required'
        ]
    ];
}

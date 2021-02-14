<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

class AtendimentosValidator extends LaravelValidator 
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'pets_id' => 'required',
            'data_atendimento'=> 'required',
            'descricao'=> 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'pets_id' => 'required',
            'data_atendimento'=> 'required',
            'descricao'=> 'required'
        ]
    ];
}

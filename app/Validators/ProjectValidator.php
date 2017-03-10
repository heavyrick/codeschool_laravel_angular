<?php

namespace CsProjeto\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id'      => 'required',
        'client_id'     => 'required',
        'name'          => 'required',
        'description'   => 'required'
    ];

}
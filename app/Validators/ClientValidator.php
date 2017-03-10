<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 07/03/2017
 * Time: 23:03
 */

namespace CsProjeto\Validators;

use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name'          => 'required|max:255',
        'responsible'   => 'required|email',
        'phone'         => 'required',
        'address'       => 'required'
    ];

}
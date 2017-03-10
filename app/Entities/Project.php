<?php

namespace CsProjeto\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'owner_id',
        'client_id',
        'name',
        'description',
        'progress',
        'status',
        'due_date'
    ];

    public function client(){
        return $this->belongsTo('CsProjeto\Entities\Client', 'client_id');
    }

    public function user(){
        return $this->belongsTo('CsProjeto\Entities\User', 'owner_id');
    }

}

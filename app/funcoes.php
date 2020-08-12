<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcoes extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

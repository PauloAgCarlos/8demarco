<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudantes extends Model
{
    //
   public function matricula()
    {
        return $this->hasOne('App\matriculas');
    }
}

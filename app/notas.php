<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notas extends Model
{
    //

     public function estudante()
    {
        return $this->belongsTo('App\estudantes');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudantes extends Model
{
    //
   public function matricula()
    {
    	// Relacionamento 1 para 1
        return $this->hasOne('App\matriculas','estudante_id');
    }


    public function notas()
    {
    	// Relacionamento 1 para muitos
        return $this->hasMany('App\notas', 'estudante_id');
    }
}

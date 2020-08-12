<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\estudantes;

class matriculas extends Model
{
    //
     public function estudante()
    {
    	// relacionamento 1 para 1 invertido
        return $this->belongsTo	('App\estudantes');
    }
    
}

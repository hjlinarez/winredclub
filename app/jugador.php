<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    //
    public $table = 'jugador';


    public function depositos()
    {
        return $this->hasMany('App\deposito');
    }
}

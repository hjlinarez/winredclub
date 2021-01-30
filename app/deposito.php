<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deposito extends Model
{
    public $table = 'deposito';

    public function jugador()
    {
        return $this->belongsTo('App\jugador');
    }
}
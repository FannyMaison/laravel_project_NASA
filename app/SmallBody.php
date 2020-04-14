<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmallBody extends Model
{
    protected $table = 'smallbodies';
    //indique au modèle quels champs sont modifiables
    protected $fillable = ['id', 'name', 'planet', 'kind', 'distance', 'class'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table ='cars';
    //indique au modèle quels champs sont modifiables
    protected $fillable = ['brand', 'model', 'color', 'price', 'speed'];
}

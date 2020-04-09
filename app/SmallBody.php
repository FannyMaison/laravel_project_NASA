<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmallBody extends Model
{
    protected $table = 'smallbodies';
    protected $fillable = ['id', 'name', 'planet', 'kind', 'distance', 'class'];
}

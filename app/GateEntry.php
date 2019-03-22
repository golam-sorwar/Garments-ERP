<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GateEntry extends Model
{
    protected $fillable = [
      'category' , 'gateIn' , 'gateOut' , 'gatePass'
    ];
}

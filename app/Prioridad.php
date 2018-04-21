<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
  protected $table = 'prioridad';

  protected $fillable = [
    'nombre'
  ];

  protected $hidden = [
    'created_at', 'updated_at'
  ];
}

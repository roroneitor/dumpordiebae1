<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
  protected $table = 'task_priority';

  protected $fillable = [
    'nombre'
  ];

  protected $hidden = [
    'created_at', 'updated_at'
  ];
}

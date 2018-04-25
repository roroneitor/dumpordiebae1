<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
  protected $table = 'modules';

  protected $fillable = [
    'title', 'created_user_id', 'project_id'
  ];

  protected $hidden = [
    'created_at', 'updated_at'
  ];

  public function tareas()
  {
   return $this->hasMany(Tareas::class, 'module_id');
  }
}

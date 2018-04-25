<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
  protected $table = 'tasks';
  // NOTE: responsable_id es el usuario quien creo la tarea y asignado_id es el programador quien realiza la tarea.
  protected $fillable = [
    'module_id',
    'resposable_id',
    'asignado_id',
    'status_id',
    'fecha_inicial',
    'fecha_final',
    'prioridad_id',
    'descripcion'
  ];

  protected $hidden = ['created_at', 'updated_at'];

  public function usuario()  {
       return $this->belongsTo('App\User', 'assigned_user_id');
  }

  public function modulo()  {
       return $this->belongsTo('App\Modulos', 'module_id');
  }

  public function prioridad()  {
       return $this->hasOne('App\Prioridad', 'id', 'priority_id');
  }
}

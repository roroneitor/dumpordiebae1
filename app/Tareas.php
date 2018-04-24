<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
  protected $table = 'tareas';
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
}

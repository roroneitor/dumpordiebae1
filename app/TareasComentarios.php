<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareasComentarios extends Model
{
    protected $table = 'tareas_comentarios';

    protected $fillable = [
      'tarea_id', 'comentarios'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}

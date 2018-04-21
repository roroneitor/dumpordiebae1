<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadosProyectos extends Model
{
  protected $table = 'estados_proyectos';

  protected $fillable = [
    'nombre'
  ];

  protected $hidden = [
    'created_at', 'updated_at'
  ];
    /*

New
In specification
Specified
Confirmed
To be scheduled
Scheduled
In progress
In development
Developed
In testing
Tested
Test failed
Closed
On hold
Rejected
open
closed

    */
}

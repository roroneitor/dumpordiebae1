<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'projects';

    protected $fillable = [
      'title', 'date_init', 'date_end', 'client_id', 'user_id', 'description', 'finalized'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}

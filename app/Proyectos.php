<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    protected $table = 'projects';

    protected $fillable = [
      'title', 'date_init', 'date_end', 'client_id', 'responsible_user_id', 'created_user_id', 'description', 'finalized'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function modulos()
    {
      return $this->hasMany(Modulos::class, 'project_id');
    }

    public function desarrolladores()
    {
      return $this->belongsToMany(User::class, 'participants', 'project_id');
    }
}

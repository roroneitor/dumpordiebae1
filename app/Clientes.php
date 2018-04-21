<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
  protected $table = 'clients';

  protected $fillable = [
    'id_number', 'email', 'business_name', 'state_id', 'country_id', 'phone', 'description'
  ];
//'created_user_id'
  protected $hidden = ['created_at', 'updated_at'];
}

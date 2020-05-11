<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $table = 'contacts';
  //protected $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];
}

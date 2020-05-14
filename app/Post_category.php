<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_category extends Model
{
  protected $table = 'post_categories';
  //protected $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];


/*// RELACION DE 1 A N
  public function posts(){
    return $this->hasMany('App\Post');
  }*/


}

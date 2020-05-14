<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $table = 'posts';
  //public $timestamps = true;
  //protected $primaryKey = 'id';
  protected $guarded = [];


// RELACION DE N A 1
  public function category(){
    return $this->belongsTo('App\Post_category','post_categories_id');
  }
}

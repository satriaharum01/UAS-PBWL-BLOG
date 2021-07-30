<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_cat_id', 'post_date','post_slug','post_title','post_text'];


    public function Category()
    {
     return $this->belongsTo('App\Models\category', 'post_cat_id','cat_id');  
    }

    public function Photos()
    {
     return $this->hasMany('App\Models\photos', 'post_id');  
    }
}



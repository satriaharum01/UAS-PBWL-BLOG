<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = "cat_id";
    protected $fillable = ['cat_name','cat_text'];
    
    public function Post()
    {
     return $this->hasMany('App\Models\post', 'cat_id');  
    }
}	

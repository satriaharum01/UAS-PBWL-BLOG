<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $table = 'photos';
    protected $primaryKey = 'pho_id';
    protected $fillable = ['pho_post_id','pho_date', 'pho_title', 'pho_text','gambar'];

     public function Post()
    {
    	return $this->belongsTo('App\Models\Post', 'pho_post_id','post_id');  
    }

    public function Album()
    {
     return $this->hasMany('App\Models\Album','pho_id');  
    }
}

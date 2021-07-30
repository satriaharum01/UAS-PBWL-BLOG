<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_pho_id','album_name','album_text'];

     public function Photos()
    {
     return $this->belongsTo('App\Models\Photos', 'album_pho_id','pho_id');  
    }
}

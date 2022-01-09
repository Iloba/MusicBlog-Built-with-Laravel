<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //create a relationship Between Users and Posts
    public function user(){
        return $this->belongsTo('App\User');
    }
}

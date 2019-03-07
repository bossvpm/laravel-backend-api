<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVideo extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'created_by', 'video_id'
   ];
}

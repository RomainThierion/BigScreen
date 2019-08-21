<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function questions(){
      return $this->hasOne('App\Response');
    }

    public function scopePullChoice(){
      return json_decode($this->choice);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  public function responses(){
    return $this->hasOne('App\Question');
  }

  public function scopeQuestion() {
    return Question::find($this.question_id);
  }
}

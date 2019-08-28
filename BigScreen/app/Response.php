<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
  protected $fillable = array(
    'created_by_user_id',
    'updated_by_user_id',
    'question_id'
  );

  public function responses(){
    return $this->hasOne('App\Question');
  }

  public function scopeQuestion() {
    return Question::find($this.question_id);
  }

  
}

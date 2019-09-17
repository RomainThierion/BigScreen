<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['question_id','survey_id','value'];

    public function scopeQuestion() {
      return Question::find($this->question_id);
    }

    public function scopeSurvey() {
      return Survey::find($this->survey_id);
    }

    public function responses(){
      return $this->hasOne('App\Question');
    }


}

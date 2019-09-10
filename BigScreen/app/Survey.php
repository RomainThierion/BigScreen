<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $fillable = ['link', 'email'];

  public function Hasresponses()
  {
      return $this->hasMany(Response::class);
  }
}

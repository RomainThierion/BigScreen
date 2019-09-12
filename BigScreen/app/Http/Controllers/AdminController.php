<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Survey;
use App\Response;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function admin(){
    return view('administration');
  }

  public function survey(){
    $questions = Question::all();
    return view('survey', ['questions' => $questions]);
  }

  public function responses(){
    $surveys = Survey::all();
    return view('responses', ['surveys' => $surveys]);
  }
}

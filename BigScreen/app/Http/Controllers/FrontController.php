<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Question;
use App\Response;
use App\Survey;

class FrontController extends Controller
{  
  public function index(){
    $questions = Question::all();
    return view('index', ['questions' => $questions]);
  }
  
  public function storeResponses(Request $request){
    $survey = Survey::where('email', $request->email)->first();

    if ($survey == null) {
      $survey = Survey::create([
        'link' => Str::uuid()->toString(),
        'email' => $request->email
      ]);
    }
    elseif ($survey !== null) {
      return view('erreur');
    }

    foreach($request->all() as $key => $value ){
      if ($key == '_token' | $key == 'email') {
        
      }
      else {
        Response::create([
          'question_id' => $key,
          'value' => $value,
          'survey_id' => $survey->id
        ]);       
      }
    }

    return view('validate', ['survey' => $survey]);
  }

  public function yourSurvey(string $link) {
    $survey = Survey::where('link', $link)->first();
    return view('yourSurvey', ['survey' => $survey]);
  }
}

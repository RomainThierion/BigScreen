<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Response;

class FrontController extends Controller
{
  protected $guarded = [];
  
  public function index(){
    $questions = Question::all();
    return view('index', ['questions' => $questions]);
  }
  
  public function storeResponses(Request $request){
    $response = new Response();
    $array = $request->all();
    $remove = array_shift($array);
  
    foreach($array as $key => $value ){
      $request->question_id = (string) $key;
      $request->value = (string) $value;
      $request->user_id = 1;
      $response->save();
    }
    
    return $request->all();
  }
}

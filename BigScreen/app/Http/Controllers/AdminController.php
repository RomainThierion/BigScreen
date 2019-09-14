<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Survey;
use App\Response;

class Chart {
  public $title = '';
  public $id = 0;
  public $labels = array();
  public $datas = array();
  public $colors = array();
}

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  function random_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }

  public function pie_chart(int $question_id): Chart {
        $question = Question::find($question_id);
        $pie = new Chart();
        $pie->title = $question->text;
        $pie->id = $question->id;

        $labels = json_decode($question->choice);
        foreach ($labels as $label) {
            array_push($pie->labels, $label);
            array_push($pie->datas, '0');
            array_push($pie->colors, $this->random_color());
        }

        $responses = Response::where('question_id', $question->id)->get();
        if ($responses) {
            foreach ($responses as $response) {
                $key = array_search($response->value, $pie->labels);
                if ($key > -1) $pie->datas[$key]++;
            }
        }
        return $pie;
  }

    public function radar_chart(int $start_question_id,int $end_question_id) {
        $radar = new Chart();
        $radar->title = "Questions 11 à 15";
        for ($i = 1; $i <= 5; ++$i) {
            array_push($radar->labels, $i);
            array_push($radar->datas, '0');
        }
        array_push($radar->colors, $this->random_color());

        for ($i = $start_question_id; $i <= $end_question_id; ++$i) {
            $responses = Response::where('question_id', Question::find($i)->id)->get();
            if ($responses) {
                foreach ($responses as $response) {
                    $key = array_search($response->value, $radar->labels);
                    if ($key > -1) $radar->datas[$key]++;
                }
            }
        }

        return $radar;
    }

  public function admin(){
    $piec = [];
    array_push($piec, $this->pie_chart(6));
    array_push($piec, $this->pie_chart(7));
    array_push($piec, $this->pie_chart(10));
    $radarc = [];
    array_push($radarc, $this->radar_Chart(11,15));
    return view('administration', ['pie_charts' => $piec, 'radar_charts' => $radarc]);
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

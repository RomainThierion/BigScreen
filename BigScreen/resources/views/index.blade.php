@extends('master')
@section('content')
    
<h3>Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h3>

<form action="{{action('FrontController@storeResponses')}}" method="POST">
@csrf
  <div class="form-group">
    @foreach($questions as $question)
      <h2>{{$question->title}}</h2>
      <label>{{$question->text}}</label>

      @if($question->type === "enum")
        <select id="select" name="{{$question->id}}">
          @foreach($question->PullChoice() as $choice)
            <option value="{{$choice}}">{{$choice}}</option>
          @endforeach
        </select>
      @elseif($question->type === "varchar") 
        <input type="text" name="{{$question->id}}">
      @elseif($question->type === "range")
        <label for="{{$question->id}}">1</label>
        <input type="radio" name="{{$question->id}}" value="1" checked="checked" required> 
        <label for="{{$question->id}}">2</label>
        <input type="radio" name="{{$question->id}}" value="2"> 
        <label for="{{$question->id}}">3</label>
        <input type="radio" name="{{$question->id}}" value="3"> 
        <label for="{{$question->id}}">4</label>
        <input type="radio" name="{{$question->id}}" value="4"> 
        <label for="{{$question->id}}">5</label>
        <input type="radio" name="{{$question->id}}" value="5"> 
      @endif
    @endforeach
    <input type="submit" value="Valider">
  </div>
</form>

@endsection
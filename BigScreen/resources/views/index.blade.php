@extends('master')
@section('content')
    
<form action="{{action('FrontController@storeResponses')}}" class="col-md-8 bigscreen-form big-margin-top" method="POST">
@csrf

  <h3 class="margin-top">Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h3>

  <div class="form-group">
    @foreach($questions as $question)
      <h3 class="margin-top">{{$question->title}}</h2>
      <label>{{$question->text}}</label><br/>

      @if($question->text == 'Votre adresse mail')
        <input type="email" class="form-control input-style" name="email">

      @elseif($question->text == 'Votre âge')
        <input type="number" class="form-control input-style" name="email" min="1" max="150">

      @elseif($question->type === "enum")
        <select id="select" class="form-control input-style" name="{{$question->id}}">
          @foreach($question->PullChoice() as $choice)
            <option value="{{$choice}}">{{$choice}}</option>
          @endforeach
        </select>
      @elseif($question->type === "varchar" && $question->text !== 'Votre adresse mail') 
        <input type="text" class="form-control input-style" name="{{$question->id}}">
      @elseif($question->type === "range")

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
          <label for="{{$question->id}}" class="btn btn-secondary active">
            <input type="radio" name="{{$question->id}}" value="1"S autocomplete="off" checked="checked" required>1
          </label>
          <label for="{{$question->id}}" class="btn btn-secondary">
            <input type="radio" name="{{$question->id}}" value="2" autocomplete="off">2
          </label>
          <label for="{{$question->id}}" class="btn btn-secondary">
            <input type="radio" name="{{$question->id}}" value="3" autocomplete="off">3
          </label>
          <label for="{{$question->id}}" class="btn btn-secondary">
            <input type="radio" name="{{$question->id}}" value="4" autocomplete="off">4
          </label>
          <label for="{{$question->id}}" class="btn btn-secondary">
            <input type="radio" name="{{$question->id}}" value="5" autocomplete="off">5
          </label>
        </div>
      @endif
    @endforeach
    <input type="submit" class="btn btn-outline-primary margin-top" value="Valider">
  </div>
</form>

@endsection
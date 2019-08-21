@extends('master')
@section('content')
    
<form>
  <div class="form-group">
    @foreach($questions as $question)
      <h2>{{$question->title}}</h2>
      <label>{{$question->text}}</label>

      @if($question->type === "enum")
        <select id="select">
          @foreach($question->PullChoice() as $choice)
            <option value="{{$choice}}">{{$choice}}</option>
          @endforeach
        </select>
      @elseif($question->type === "varchar") 
        <input type="text" name="value">
      @elseif($question->type === "range")
        <label for="number">1</label>
        <input type="radio" name="number" value="1" required> 
        <label for="number">2</label>
        <input type="radio" name="number" value="2"> 
        <label for="number">3</label>
        <input type="radio" name="number" value="3"> 
        <label for="number">4</label>
        <input type="radio" name="number" value="4"> 
        <label for="number">5</label>
        <input type="radio" name="number" value="5"> 
      @endif
      @endforeach

  </div>
</form>

@endsection
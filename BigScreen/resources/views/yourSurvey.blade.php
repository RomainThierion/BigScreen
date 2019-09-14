@extends('master')
@section('content')

@foreach($surveys as $survey)
<h3 class="medium-margin-top">Formulaire de: {{$survey->email}}</h3>
<p> Fait le : {{$survey->created_at}}</p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Questions</th>
        <th scope="col">Réponses</th>
      </tr>
    </thead>
    <tbody>
    @foreach($survey->responses as $response)
      <tr>
        <td>{{$response->Question()->title}}</td>
        <td>{{$response->Question()->text}}</td>
        <td>{{$response->value}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endforeach
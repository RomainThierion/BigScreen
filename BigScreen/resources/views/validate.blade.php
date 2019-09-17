@extends('master')
@section('content')

<div class="alert alert-success" role="alert" style="width: 500px; margin: 100px auto 0 auto;"">
  <p>Merci d'avoir validé le sondage, 
    voici un lien pour le revoir:</p>
  <a href="/questionnaire/{{$survey->link}}">Lien du sondage</a>
</div>


@extends('master')
@section('content')

<p style="margin-top: 100px;">Merci d'avoir validé le sondage, 
                              voici un lien pour le revoir</p>
<a href="/questionnaire/{{$survey->link}}">Lien du sondage</a>
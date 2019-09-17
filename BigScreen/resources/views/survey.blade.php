@extends('master')
@section('content')

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item medium-margin-top">
        <a class="nav-link" href="/administration">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accueil</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/administration/survey">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Questionnaire</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/administration/responses">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Réponses</span></a>
      </li>
    </ul>
    <!-- End Sidebar -->

    <!-- All Questions -->
    <div id="content-wrapper">
      <div class="container-fluid">
        <table class="table table-bordered medium-margin-top">
          <thead>
            <tr>
              <th scope="col">N°</th>
              <th scope="col">Texte</th>
              <th scope="col">Type</th>
            </tr>
          </thead>
          <tbody>
            @foreach($questions as $question)
            <tr>
              <th scope="row">{{$question->title}}</th>
              <td>{{$question->text}}</td>
              <td>{{$question->type}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- End All Questions -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#">
    <img class="arrow-top" src="{{asset('tiny-arrow-top.png')}}" alt="arrow-top"/>
  </a>

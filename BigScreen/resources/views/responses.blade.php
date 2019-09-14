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
      <li class="nav-item">
        <a class="nav-link" href="/administration/survey">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Questionnaire</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/administration/responses">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Réponses</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
      
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
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#">
    <img class="arrow-top" src="{{asset('tiny-arrow-top.png')}}" alt="arrow-top"/>
  </a>

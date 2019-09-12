@extends('master')
@section('content')

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item nav-margin">
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

    <div id="content-wrapper">

      <div class="container-fluid">

        <table class="table table-bordered" style="margin-top: 60px;">
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
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

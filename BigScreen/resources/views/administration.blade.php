@extends('master')
@section('content')

<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/chart-plugin.js') }}"></script>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active medium-margin-top">
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
      <li class="nav-item">
        <a class="nav-link" href="/administration/responses">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Réponses</span></a>
      </li>
    </ul>
    <!-- End Sidebar -->

    <!-- Charts -->
    <div id="content-wrapper">
      <div class="container-fluid medium-margin-top">
        <div class="row">
          @foreach($pie_charts as $pie_chart)
            <div class="col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0">{{$pie_chart->title}}</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div>
                    <canvas id="{{$pie_chart->id}}"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <script>
              new Chart(document.getElementById({{$pie_chart->id}}), {
                type: 'pie',
                data: {
                  labels: @json($pie_chart->labels),
                  datasets: [{
                    data: @json($pie_chart->datas),
                    backgroundColor: @json($pie_chart->colors),
                  }]
                },
                options: {
                  plugins: {
                    labels: {
                      // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
                      render: 'value'
                    }
                  }
                }
              });
            </script>
          @endforeach
          

          @foreach($radar_charts as $radar_chart)
            <div class="col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <p class="m-0">{{$radar_chart->title}}</p>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <canvas id="{{$radar_chart->id}}"></canvas>
                </div>
              </div>
            </div>
            <script>
              new Chart(document.getElementById({{$radar_chart->id}}), {
                type: 'radar',
                data: {
                  labels: @json($radar_chart->labels),
                  datasets: [{
                    label: @json($radar_chart->labels),
                    data: @json($radar_chart->datas),
                    backgroundColor: @json($radar_chart->colors),
                  }],
                },
                options: {
                  scale: {
                    ticks: {
                      beginAtZero: true,
                    },
                  }
                }
              });
            </script>
          @endforeach
        </div>
      </div>
    </div>
    <!-- End Sidebar -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#">
    <img class="arrow-top" src="{{asset('tiny-arrow-top.png')}}" alt="arrow-top"/>
  </a>
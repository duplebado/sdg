@extends('layouts.app')

@section('content')

<section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count" id="count">
                                  {{count($projects)}}
                              </h1>
                              <p>Contractors</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                {{count($projects)}}
                              </h1>
                              <p>Projects</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  36
                              </h1>
                              <p>States</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="card">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                              {{count($users)}}
                              </h1>
                              <p>System Users</p>
                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="card">
                          <div class="card-body">
                              <a href="#" class="task-thumb">
                                  <img src="{{ asset('admin/img/user.png') }}" alt="" height="35px">
                              </a>
                              <div class="task-thumb-details">
                                  <h1><a href="#">{{auth()->user()->name}}</a></h1>
                                  <p>{{auth()->user()->role}}</p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                                <tr>
                                    <td>
                                        <i class=" fa fa-tasks"></i>
                                    </td>
                                    <td>Number of Projects Created</td>
                                    <td> {{$createdPro}}</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
                  <div class="col-lg-8">
                      <!--work progress start-->
                      <section class="card">
                          <div class="card-body progress-card">
                              <div class="task-progress">
                                  <h1>Projects</h1>
                              </div>
                              <div class="task-option">
                                  <!-- <select class="styled">
                                      <option>Anjelina Joli</option>
                                      <option>Tom Crouse</option>
                                      <option>Jhon Due</option>
                                  </select> -->
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                                  @foreach($projects as $pro)
                              <tr>
                                  <td>{{$pro->id}}</td>
                                  <td>
                                     {{ (strlen($pro->name) > 50) ? substr($pro->name,0,50).'...' : $pro->name }}
                                  </td>
                                  <td>
                                      <span class="badge badge-pill badge-success">{{$pro->percentage}}</span>
                                  </td>
                                  <td>
                                    <div id="work-progress1"></div>
                                  </td>
                              </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </section>
                      <!--work progress end-->
                  </div>
              </div>

          </section>
@endsection
@section('script')
    <script src="{{ asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{ asset('admin/js/owl.carousel.js')}}" ></script>
    <script src="{{ asset('admin/js/jquery.customSelect.min.js')}}" ></script>


    <!--script for this page-->
    <script src="{{ asset('admin/js/sparkline-chart.js')}}"></script>
    <script src="{{ asset('admin/js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('admin/js/count.js')}}"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>
@endsection

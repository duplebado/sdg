<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="licorne">
    <meta name="keyword" content="SDG">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>SDG Impact Project</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <!-- Yamm styles-->
    <link href="{{ asset('admin/css/yamm.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/css/gallery.css')}}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">

    <style type="text/css">.fancybox-margin{margin-right:0px;}</style>

  </head>

  <body class="mega-nav">

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="navbar-header">
              <nav id="navbar-collapse-1" class="navbar navbar-expand-md navbar-light px-0">

                  <!--logo start-->
                  <a href="/" class="logo mt-0" >SDG<span> Impact Project</span></a>
                  <!--logo end-->

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse yamm mega-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                          <!-- Classic list -->
                          <li class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">State </a>
                              <ul class="dropdown-menu wide-full">

                              </ul>
                          </li>
                      </ul>
                  </div>

              </nav>
          </div>
      </header>
      <!--header end-->

      <!--main content start-->
      <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      Projects Details
                      <span class="pull-right">
                          <a href="/state/{{$project->state}}" id="loading-btn" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Back </a>
                      </span>
                  </header>

              </section>
              <div class="row">
                  <div class="col-md-8">
                      <section class="card">
                          <div class="bio-graph-heading project-heading">
                              <strong> {{$project->name }} </strong>
                          </div>
                          <div class="card-body bio-graph-info">
                              <!--<h1>New Dashboard BS3 </h1>-->
                              <div class="row p-details">
                                  <div class="bio-row">
                                      <p><span class="bold">Status </span>: <span class="badge badge-primary">{{ $project->status }}</span></p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Due Date </span>: {{ $project->date }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Date Added </span>: {{ $project->created_at}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Sponsor </span>: {{ $project->sponsor }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Contractor </span>: {{ $project->contractor_name }}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Project Cost </span>: &#8358;{{ number_format($project->amount,2) }} </p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span class="bold">Current Functionality</span>: {{ $project->function }}</p>
                                  </div>
                                  <div class="col-lg-12">
                                      <dl class="dl-horizontal mtop20 p-progress">
                                          <dt>Project Completed:</dt>
                                          <dd>
                                              <div class="progress">
                                                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{$project->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$project->percentage}}%"></div>
                                              </div>
                                              <small>Project completed in <strong>{{$project->percentage}}%</strong>. </small>
                                              <!-- Remaining close the project, sign a contract and invoice. -->
                                          </dd>
                                      </dl>
                                  </div>
                              </div>

                          </div>

                      </section>

                      <section class="card">
                  <header class="card-header">
                      Project Images
                  </header>
                  <div class="container">
                  <div class="card-body">
                      <ul class="grid cs-style-3">
                          @foreach($project->images as $image)
                          <li>
                              <figure>
                                  <img src="{{ asset('images/projects/'.$image->name) }}" alt="image">
                                  <figcaption>
                                      <h3>{{$image->title}}</h3>
                                      <span>{{$image->caption}} </span>
                                  </figcaption>
                              </figure>
                          </li>
                          @endforeach
                      </ul>
                  </div>
              </section>
<div id="div1"></div>
                  </div>
                  <div class="col-md-4">
                      <section class="card">
                          <header class="card-header">
                              Projects Description
                          </header>

                          <div class="card-body">
                              <!-- <a href="#"><img src="admin/img/email-img/vector-lab.jpg" alt=""/></a> -->

                              <p>
                                  {{ $project->description}}
                              </p>
                              <br/>
                              <h6 class="bold">Project Location</h6>
                              <ul class="list-unstyled p-files">
                                  <li><strong>State:</strong> {{ $project->state }}</li><br>
                                  <li><strong>LGA/Area Council:</strong> {{ $project->lga }}</li><br>
                                  <li><strong>Coordinates:</strong> {{$project->lat}},{{$project->long}}</li><br>
                                  <li><strong>Community:</strong> {{ $project->community}}</li><br>
                              </ul>
                              <br/>

                              <h6 class="bold">Contractor Details</h6>
                              <ul class="p-tag-list">
                                    <li><strong>Contractor:</strong> {{ $project->contractor_name }}</li><br>
                                    <li><strong>Contractor Phone :</strong> {{ $project->contractor_phone }}</li><br>
                                    <li><strong>Contractor's Address:</strong> {{$project->contractor_address}}</li><br>
                              </ul>

                              
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('admin/js/jquery.js')}}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/hover-dropdown.js')}}"></script>
    <script src="{{ asset('admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/respond.min.js')}}" ></script>

  <!--right slidebar-->
  <script src="{{ asset('admin/js/slidebars.min.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{ asset('admin/js/common-scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/fancybox/source/jquery.fancybox.js') }} "></script>
    <script src="{{ asset('admin/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('admin/js/toucheffects.js') }}"></script>
    <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });
      function deleteProject(id){
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this project!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                axios({
                    url: '/projects/'+id,
                    method: 'delete'
                }).then((response)=>{
                    if(response.data == 'deleted'){
                        swal("Project has been deleted!",{
                            icon: "success"
                        }).then(()=>{
                            window.location = '/projects'
                        })

                    }else{
                        swal("Project could not be deleted!",{
                            icon: "failure"
                        });
                    }
                })
            } else {
                swal("Project is safe!");
            }
        });
    }
</script>


  </body>
</html>


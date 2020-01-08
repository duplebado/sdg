@extends('layouts.app')
@section('style')
<link href="{{ asset('admin/css/gallery.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">

<style type="text/css">.fancybox-margin{margin-right:0px;}</style>
@endsection
@section('content')

<section class="wrapper site-min-height">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      Projects Details
                      <span class="pull-right">
                          <a href="/projects" id="loading-btn" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Back </a>
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
                                      <p><span class="bold">Created by </span>: {{ $project->created_by}}</p>
                                  </div>
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
                  <div class="card-body">
                      <ul class="grid cs-style-3">
                          <li>
                              <figure>
                                  <img src="{{ asset('admin/img/gallery/4.jpg') }}" alt="img04">
                                  <figcaption>
                                      <h3>Mindblowing</h3>
                                      <span>lorem ipsume </span>
                                      
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="{{ asset('admin/img/gallery/1.jpg') }}" alt="img01">
                                  <figcaption>
                                      <h3>Clean & Fresh</h3>
                                      <span>dolor ament</span>
                                      
                                  </figcaption>
                              </figure>
                          </li>
                          <li>
                              <figure>
                                  <img src="{{ asset('admin/img/gallery/2.jpg') }}" alt="img02">
                                  <figcaption>
                                      <h3>Flat Concept</h3>
                                      <span>tawseef tasi</span>
                                      
                                  </figcaption>
                              </figure>
                          </li>
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

                              <div class="text-center mtop20">
                                  <a href="/projects/{{$project->id}}/edit" class="btn btn-sm btn-success">Edit Project</a>
                                  <a href="#" onclick="deleteProject({{$project->id}})" class="btn btn-sm btn-danger">Delete Project</a>
                              </div>
                          </div>

                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>

@endsection
@section('script')
<script class="include" type="text/javascript" src="{{ asset('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
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
@endsection

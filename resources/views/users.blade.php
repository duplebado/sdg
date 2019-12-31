@extends('layouts.app')
@section('style')
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
@endsection
@section('content')
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                  Dynamic Table
             <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
              </header>
              <div class="card-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action(s)</th>
              </tr>
              </thead>
              <tbody>
                  @foreach($users as $user)
                    <tr class="gradeX">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/user/show/{{$user->id}}" class="btn btn-success">View</a>
                            <a href="/user/delete/{{$user->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
              @endforeach
              </tfoot>
              </table>
              </div>
              </div>
              </section>
              </div>
              </div>
       
              <!-- page end-->
          </section>
      
@endsection
@section('script')
<script type="text/javascript" language="javascript" src="{{ asset('admin/assets/advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/data-tables/DT_bootstrap.js') }}"></script>
<script src="{{ asset('admin/js/dynamic_table_init.js') }}"></script>
@endsection
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
                  Projects
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
                  <th>Amounts</th>
                  <th>Action(s)</th>
              </tr>
              </thead>
              <tbody>
                  @foreach($projects as $pro)
                    <tr class="gradeX">
                        <td>{{ $pro->name }}</td>
                        <td>&#8358;{{ number_format($pro->amount,2) }}</td>
                        <td>
                            <a href="/project/show/{{$pro->id}}" class="btn btn-success">View</a>
                            <a href="/project/delete/{{$pro->id}}" class="btn btn-danger">Delete</a>
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
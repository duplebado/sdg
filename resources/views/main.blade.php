@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table id="table_id" class="table table-striped display">
                        <thead>
                            <tr>
                                <th>S/No</th>
                                <th>Project Name</th>
                                <th>Project Sponsor</th>
                                <th>Contractor Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($projects) > 0)
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id}}</td>
                                <td>{{ $project->name}}</td>
                                <td>{{ $project->sponsor}}</td>
                                <td>{{ $project->contractor_name}}</td>
                                <td>{{ $project->status}} </td>
                                <td>
                                    <a href="/project/{{$project->id}}">View</a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        There are no projects
                        @endif
                        </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection

@extends('layouts.app')
@section('style')
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
@endsection
@section('content')

          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      All projects List
                      <span class="pull-right">
                          <button onclick="document.location.reload(true)" type="button" id="loading-btn" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Refresh</button>
                          <a href="projects/create" class=" btn btn-success btn-sm"> Create New Project</a>
                          <a class="btn btn-outline-primary toodles btn-sm" id="print" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                        <a class="btn btn-outline-success toodles btn-sm" id="print" data-toggle="tooltip" data-placement="top" title="Export to Excel" onclick="exportTableToExcel('tblData', 'sdg-projects')"><i class="fa fa-table"></i></a>
                      </span>
                  </header>
                  <table class="table table-hover p-table" id="dynamic-table">
                      <thead>
                      <tr>
                          <th>Project Name</th>
                          <th>Project Cost</th>
                          <th>Project Progress</th>
                          <th>Project Status</th>
                          <th>Custom</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($projects as $pro)
                      <tr>
                          <td class="p-name">
                              <a href="projects/{{$pro->id}}">{{ (strlen($pro->name) > 50) ? substr($pro->name,0,50).'...' : $pro->name }}</a>
                              <br>
                              <small>Date {{ $pro->date }}</small>
                          </td>
                          <td class="p-cost">
                          &#8358;{{ number_format($pro->amount,2) }}
                          </td>
                          <td class="p-progress">
                              <div class="progress progress-xs">
                                  <div style="width: {{$pro->percentage}}%;" class="progress-bar progress-bar-success"></div>
                              </div>
                              <small>{{$pro->percentage}} Complete </small>
                          </td>
                          <td>
                              <span class="badge badge-primary">{{ $pro->status }}</span>
                          </td>
                          <td>
                              <a href="projects/{{$pro->id}}" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> View </a>
                              <a href="projects/{{$pro->id}}/edit" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" onclick="deleteProject({{$pro->id}})" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </section>
              <!-- page end-->
          </section>
      
@endsection
@section('script')
<script type="text/javascript" language="javascript" src="{{ asset('admin/assets/advanced-datatable/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/data-tables/DT_bootstrap.js') }}"></script>
<script src="{{ asset('admin/js/dynamic_table_init.js') }}"></script>
<script>
    function deleteProject(id){
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this project!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            axios({
                url: 'projects/'+id,
                method: 'delete'
            })

        if (willDelete) {
            swal("Poof! Project has been deleted!", {
            icon: "success",
            });
        } else {
            swal("Project is safe!");
        }
        });
    }
function printData()
{
   var divToPrint=document.getElementById("dynamic-table");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('#print').on('click',function(){
printData();
})
$(function() {
    $('.toodles').tooltip(options)
})
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById('dynamic-table');
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
@endsection
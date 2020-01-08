@extends('layouts.app')
@section('style')
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
<link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
@endsection
@section('content')
          <section class="wrapper">
              <!-- page start-->
              <div class="row mb-3 mt-3">
                  <div class="col-md-3">
                      <a href="people/create" class="btn btn-primary">Add New</a>
                  </div>
                  <div class="col-md-9 pull-right text-right">
                        <a class="btn btn-outline-primary toodles" id="print" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                        <a class="btn btn-outline-success toodles" id="print" data-toggle="tooltip" data-placement="top" title="Export to Excel" onclick="exportTableToExcel('tblData', 'sdg-projects')"><i class="fa fa-table"></i></a>
                    </div>
                  
              </div>
              <div class="row">
                <div class="col-sm-12">
              <section class="card">
              <header class="card-header">
                  Users
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
                            <a href="/people/{{$user->id}}" class="btn btn-success">View</a>
                            <a href="#" onclick="deleteUser({{ $user->id }})" class="btn btn-danger">Delete</a>
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
<script>
function deleteUser(id){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this User!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            axios({
                url: '/people/'+id,
                method: 'delete'
            }).then((response)=>{
                if(response.data == 'deleted'){
                    swal("User has been deleted!",{
                        icon: "success"
                    }).then(()=>{
                        window.location = '/people'
                    })

                }else{
                    swal("User could not be deleted!",{
                        icon: "failure"
                    });
                }
            })
        } else {
            swal("User is safe!");
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
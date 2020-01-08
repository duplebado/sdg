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
    <link href="{{ asset('admin/assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin/assets/data-tables/DT_bootstrap.css')}}" />

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
                          <li><a href="/login">Create Project </a></li>
                      </ul>
                  </div>

              </nav>
          </div>
      </header>
      <!--header end-->

      <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
              <!-- page start-->
              <section class="card">
                  <header class="card-header">
                      {{ucfirst($state)}} State Projects
                      <span class="pull-right">
                          <a href="/" id="loading-btn" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Back </a>
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
                              <a href="/state/projects/{{$pro->id}}" class="btn btn-primary btn-sm"><i class="fa fa-folder"></i> View </a>
                          </td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </section>
    
    
            <div style="display: block; margin: 15px auto; text-align: center;">
                <p>
                SDG Impacts at a Glance  
                </p>
            </div>
    

        <!--scripts go here -->

        <!--footer end-->
        </section>
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

  </body>
</html>


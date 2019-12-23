<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    

    <title>SDG Impact at a Glance</title>

    <!-- Bootstrap core CSS -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="admin/css/style.css" rel="stylesheet">
    <link href="admin/css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

  @yield('content')
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="admin/js/jquery.js"></script>
    <script src="admin/js/bootstrap.bundle.min.js"></script>


  </body>
</html>
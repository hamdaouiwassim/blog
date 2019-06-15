<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://unpkg.com/grapesjs/dist/css/grapes.min.css">
<script src="https://unpkg.com/grapesjs"></script>
<link rel="stylesheet" href="/grapesjs/dist/css/grapes.min.css">
    <script src="/grapesjs/dist/grapes.js"></script>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="https://feather.aviary.com/imaging/v3/editor.js"></script>
<script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

    <!-- PLUGINS -->
    <script src="/toastr/toastr.js"></script>
    <link rel="stylesheet" href="/toastr/build/toastr.min.css">

    <script src="/grapesjs-blocks-basic/dist/grapesjs-blocks-basic.min.js"></script>
    <meta charset="utf-8">
    <title>GrapesJS</title>
    <style>
       .styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1.25rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: #005a57;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
                inset -2px -2px 3px rgba(0, 0, 0, .6);
}

.styled:hover {
    background-color: #428bca;
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
                inset 2px 2px 3px rgba(0, 0, 0, .6);
}

    </style>

</head>

<body>

    <div id="soft-all-wrapper">
             <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Creation de chartes graphiques</a>
                </div>
                <!-- /.navbar-header -->
                <script src="https://feather.aviary.com/imaging/v3/editor.js"></script>
<script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

    <!-- PLUGINS -->
    <script src="/toastr/toastr.js"></script>
    <link rel="stylesheet" href="/toastr/build/toastr.min.css">

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">


            <li>
                <a href="#"><i class="fa fa-image"></i> Charte graphique <span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/index')}}"><i class="fa fa-edit"></i> Creation</a>
                    </li>
                    <li>
                        <a href="{{url('/chart/list')}}"><i class="fa fa-bars"></i> Consultation</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{url('/envoi')}}"><i class="fa fa-envelope"></i> Envoi groupe </a>
            </li>
            <li>
                <a href="{{url('/import')}}"><i class="fa fa-file"></i> Envoi csv </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> Clients <span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/admin/clients.create')}}"><i class="fa fa-user-plus"></i> Ajout</a>
                    </li>
                    <li>
                        <a href="{{url('/clients')}}"><i class="fa fa-bars"></i> Liste</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> Groupe<span class="fa fa-angle-down"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/groupes/create')}}"><i class="fa fa-user-plus"></i> Ajout</a>
                    </li>
                    <li>
                        <a href="{{url('/groupes')}}"><i class="fa fa-bars"></i> Liste</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/compagnes"><i class="fa fa-chart"></i>Compagnes de mailing</a>
            </li>
            <li>
                <a href="/statistiques"><i class="fa fa-Charts"></i> Statistiques</a>
            </li>






<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
                <div class="row">
                <h3> Statistiques </h3>
                <div  class="col-sm-6 text-center">
                        <label class="label label-success">Bar Chart</label>
                        <div id="bar-chart" >
                        </div>
                </div>

                </div>
</div>






  
        
      
      
                               
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/vendor/raphael/raphael.min.js"></script>
    <script src="/vendor/morrisjs/morris.min.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="/dist/js/sb-admin-2.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
    <script>
    var data = [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 75,  b: 60},
      { y: '2018', a: 80,  b: 65},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 75},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Income', 'Total Outcome'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };

config.element = 'bar-chart';
Morris.Bar(config);
config.element = 'stacked';
config.stacked = true;
Morris.Bar(config);

    </script>

</body>

</html>

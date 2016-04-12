<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>paperclinic@ADMIN</title>

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="https://dl.dropbox.com/s/4s2oy2bu68c99jc/custom.css?dl=0">
        <!-- admin styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Bootstrap Core CSS -->
        <link href="https://dl.dropbox.com/s/ec2bongix1zwqwl/bootstrap.min.css?dl=0" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="https://dl.dropbox.com/s/025jh39gdhn6drq/metisMenu.min.css?dl=0" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="https://dl.dropbox.com/s/hutoz2fwb3078dp/timeline.css?dl=0" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="https://dl.dropbox.com/s/0cs6869ooltniiq/startmin.css?dl=0" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="https://dl.dropbox.com/s/pw13b4y4jilehqq/morris.css?dl=0" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://dl.dropbox.com/s/89n3qedw1p0jid0/font-awesome.min.css?dl=0" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

@if (Auth::guest())
        <div id="wrapper">
		    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('admin.partials.navbar')
            </nav>
            <div class="panel-body" style="margin-top: 70px;">
                @yield('content')
            </div>
        </div>
@else
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                @include('admin.partials.navbar')
                @include('admin.partials.sidebar')
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('page-header')
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @yield('panel-header')
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        @yield('content')
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
@endif
            <!-- /wrapper --> 
<!-- jQuery -->
        <script src="https://dl.dropbox.com/s/0woofli8yuhcexx/jquery.min.js?dl=0"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="https://dl.dropbox.com/s/2dcq8z57zppi3mt/bootstrap.min.js?dl=0"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="https://dl.dropbox.com/s/zmzoy4yo2iqcog5/metisMenu.min.js?dl=0"></script>

        <!-- Morris Charts JavaScript -->
        <script src="https://dl.dropbox.com/s/myrv8158qsenoej/raphael.min.js?dl=0"></script>
        <script src="https://dl.dropbox.com/s/tjdl7re27y3fgrd/morris.min.js?dl=0"></script>
        <script src="https://dl.dropbox.com/s/1hqtpqhtlw4yo3k/morris-data.js?dl=0"></script>

        <!-- Custom Theme JavaScript -->
        <script src="https://dl.dropbox.com/s/9c19kg6pr268eh9/startmin.js?dl=0"></script>

    </body>
</html>
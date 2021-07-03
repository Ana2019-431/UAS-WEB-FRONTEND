<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>SIDUK | SistemKependudukan - Desa Kendalpayak</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/main.css')}}" rel="stylesheet" type="text/css">
    
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{asset('admin/assets/ico/queenadmin-favicon144x144.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{asset('admin/assets/ico/queenadmin-favicon114x114.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{asset('admin/assets/ico/queenadmin-favicon72x72.png')}}">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{asset('admin/assets/ico/queenadmin-favicon57x57.png')}}">
	<link rel="shortcut icon" href="{{asset('admin/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP NAV BAR -->
		@include('layouts.includes._navbar')
		<!-- END TOP NAV BAR -->
		<!-- COLUMN LEFT -->
		@include('layouts.includes._sidebar')
		<!-- END COLUMN LEFT -->
		<!-- COLUMN RIGHT -->
		<div id="col-right" class="col-right ">
			@yield('content')
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/js/jquery/jquery-2.1.0.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/bootstrap/bootstrap.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-common.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.resize.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.time.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.orderBars.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/raphael/raphael-min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/jquery.mapael.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/mapael/maps/world_countries.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/bootstrap-editable/bootstrap-editable.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/plugins/jquery-maskedinput/jquery.masked-input.min.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-charts.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-maps.js')}}"></script>
	<script src="{{asset('admin/assets/js/queen-elements.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>

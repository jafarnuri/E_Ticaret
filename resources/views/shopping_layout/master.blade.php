<?php


use App\Models\Ayarlar;
use App\Models\User;
$user=User::where('id',0);
$ayarlar=Ayarlar::all()->first();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$ayarlar->ayar_title}}</title>

    <!-- Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700" rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Pacifico" rel='stylesheet' type='text/css'>
	<link href="{{asset('/')}}frontend/font-awesome\css\font-awesome.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="{{asset('/')}}frontend/bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="{{asset('/')}}frontend/style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="{{asset('/')}}frontend/css\owl.carousel.css">
	<link rel="stylesheet" href="{{asset('/')}}frontend/css\owl.transitions.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
        <!-- top header -->
          @include('shopping_layout.header')
      
        <!-- /top header -->
            <!-- sidebar menu -->
            @include('shopping_layout.sdebar')
            <!-- /sidebar menu -->
	<div class="container">
		<ul class="small-menu"><!--small-nav -->
      <li><a href="{{url('/hesabim')}}" class="myacc">Menim Hesabim</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul><!--small-nav -->
	
        <!-- start content -->
        @yield('content')
        
        <!-- end content -->

        <!-- footer content -->
       @include('shopping_layout.footer')
        <!-- /footer content -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('/')}}frontend/bootstrap\js\bootstrap.min.js"></script>
	
	<!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="{{asset('/')}}frontend/js\jquery.ui.map.js"></script>
	<script type="text/javascript" src="{{asset('/')}}frontend/js\demo.js"></script>
	
	<!-- owl carousel -->
    <script src="{{asset('/')}}frontend/js\owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="{{asset('/')}}frontend/js\rate\jquery.raty.js"></script>
	<script src="{{asset('/')}}frontend/js\labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="{{asset('/')}}frontend/js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
    <script type="text/javascript" src="{{asset('/')}}frontend/js\product\jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
    <script src="{{asset('/')}}frontend/js\shop.js"></script>
	</div>
  </body>
</html>

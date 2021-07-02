<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('website/img/icon-umm.ico')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>{{config('sekolah.tittle')}}</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('website/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('website/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('website/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('website/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('website/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('website/css/owl.carousel.css')}}">			
			<link rel="stylesheet" href="{{asset('website/css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('website/css/main.css')}}">
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+62 31 8921 591"><span class="lnr lnr-phone-handset"></span> <span class="text">{{config('sekolah.telpon')}}</span></a>
			  				<a href="mailt:smamda@smamda.sch.id"><span class="lnr lnr-envelope"></span> <span class="text">{{config('sekolah.email')}}</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="/"><img src="{{asset('website/img/logo-umm.png')}}" width="150" height="80" alt="" title="" /></a>
			      </div>	    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			@yield('content')
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="title text-center" >
							<h1 style="color:#FFFFFF;" style="text-align:center">UNIVERSITAS MUHAMMADIYAH MALANG</h1>
						</div>
						<div class="footer-text m-0 col-lg-6 col-md-12">
							<br>	
							<div class="contact-details">
								<p>
                                Jl. Bendungan Sutami No.188, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145
								</p>
								<p>
                                Telp.  (0341) 551149
								</p>
								<p>
								Email : smamda@smamda.sch.id
								</p>
							</div>
						</div>
							<br>
							
						
							
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
						UMM &copy;<script>document.write(new Date().getFullYear());</script></p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="https://www.facebook.com/smamda/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/smamda_sda/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/smamda.id/?hl=id/"><i class="fa fa-instagram"></i></a>
						</div>
					</div>						
				</div>
			</footer>	
			<!-- End footer Area -->	


			<script src="{{asset('website/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('website/js/vendor/bootstrap.min.js')}}"></script>			
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWdGA-ndsHMtR5-cdZrc5SHtfKKBG5Bfg&callback=initMap"></script>
  			<script src="{{asset('website/js/easing.min.js')}}"></script>			
			<script src="{{asset('website/js/hoverIntent.js')}}"></script>
			<script src="{{asset('website/js/superfish.min.js')}}"></script>	
			<script src="{{asset('website/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>	
    		<script src="{{asset('website/js/jquery.tabs.min.js')}}"></script>						
			<script src="{{asset('website/js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{asset('website/js/owl.carousel.min.js')}}"></script>									
			<script src="{{asset('website/js/mail-script.js')}}"></script>	
			<script src="{{asset('website/js/main.js')}}"></script>	
			
		</body>
	</html>
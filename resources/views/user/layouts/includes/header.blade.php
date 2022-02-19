<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="col-sm-4"></div>
				<div class="col-sm-4 logo">
					<a href="{{route('home')}}"><img src="images/logo.png" alt=""></a>	
				</div>
			<div class="col-sm-4 header-left">		
					<p class="log"><a href="{{route('account')}}"  >Login</a>
						<span>or</span><a  href="{{route('user.logout')}}"  >logout</a></p>
					<div class="cart box_1">
						<a href="{{route('checkout')}}">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="col-sm-3"></div>	
		 <div class="col-sm-6 h_menu4">
			<ul class="memenu skyblue">
				<li class=" grid"><a  href="{{route('home')}}">Home</a></li>	
				<li><a  href="{{ route('product') }}">Product</a></li>
				<li><a  href="{{route('typo')}}">Blog</a></li>				
				<li><a class="color6" href="{{route('contact')}}">Conact</a></li>
			</ul> 
		</div>
				<div class="col-sm-3 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
					  <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<p>	Shopping</p>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
@extends('user.layouts.layoutmaster')
@section('body')
<div class="banner">
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive"	src="images/ba1.jpg" alt="">
	</div>
	<div class="col-sm-6 matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
	          			<img src="images/1.jpg" alt="">
	       			 </li>
			 		 <li>
	          			<img src="images/2.jpg" alt="">   
	       			 </li>
					 <li>
	          			<img src="images/1.jpg" alt="">
	        		</li>	
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="col-sm-3 banner-mat">
		<img class="img-responsive" src="images/ba.jpg" alt="">
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>Recent Products</h1>
			<div class="content-top1">
				@foreach ( $sanpham as $item )
				<div class="col-md-3 col-md2">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="{{route('single',$item->id)}}">
							<img class="img-responsive" src="images/{{ $item->HINHANH }}" alt="" />
						</a>
						<h3><a href="{{route('single',$item->id)}}">{{ $item->TENSP }}</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="{{route('add-cart',$item->id)}}" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
				@endforeach
			</div>	
		</div>
	</div>
</div>
@endsection
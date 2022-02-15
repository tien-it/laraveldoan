@extends('user.layouts.layoutmaster')
@section('body')
<div class="container">


    <div class="col-md-9">
        <div class="col-md-5 grid">		
            <div class="flexslider">
                        <img src="{{ $sanpham->HINHANH }}" data-imagezoom="true" class="img-responsive">
            </div>
        </div>	
    <div class="col-md-7 single-top-in">
                            <div class="single-para simpleCart_shelfItem">
                                <h1>Description</h1>
                                <p>{{ $sanpham->MOTA }}</p>
                                    <label  class="add-to item_price">$300</label>
                                    <a href="#" class="cart item_add">Add Cart</a>
                            </div>
                        </div>
    </div>
    <!----->
    <div class="col-md-3 product-bottom">
                <!--categories-->
                    <div class=" rsidebar span_1_of_left">
                            <h3 class="cate">Categories</h3>
                                 <ul class="menu-drop">
                                <li class="item1"><a href="#">Men </a>
                                    <ul class="cute">
                                        <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                        <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                        <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                                    </ul>
                                </li>
                                <li class="item2"><a href="#">Women </a>
                                    <ul class="cute">
                                        <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                        <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                        <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                                    </ul>
                                </li>
                                <li class="item3"><a href="#">Kids</a>
                                    <ul class="cute">
                                        <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                        <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                        <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                                    </ul>
                                </li>
                                <li class="item4"><a href="#">Accesories</a>
                                    <ul class="cute">
                                        <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                        <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                        <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
                                    </ul>
                                </li>
                                        
                                <li class="item4"><a href="#">Shoes</a>
                                    <ul class="cute">
                                        <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                                        <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                                        <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <!--initiate accordion-->
                            <script type="text/javascript">
                                $(function() {
                                    var menu_ul = $('.menu-drop > li > ul'),
                                           menu_a  = $('.menu-drop > li > a');
                                    menu_ul.hide();
                                    menu_a.click(function(e) {
                                        e.preventDefault();
                                        if(!$(this).hasClass('active')) {
                                            menu_a.removeClass('active');
                                            menu_ul.filter(':visible').slideUp('normal');
                                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                                        } else {
                                            $(this).removeClass('active');
                                            $(this).next().stop(true,true).slideUp('normal');
                                        }
                                    });
                                
                                });
                            </script>
    <!--//menu-->
    <!--seller-->
                    <div class="product-bottom">
                            <h3 class="cate">Best Sellers</h3>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="images/pr.jpg" alt=""></a>	
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                                <span class=" price-in1"> $40.00</span>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>	
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                                <span class=" price-in1"> $40.00</span>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>	
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                                <span class=" price-in1"> $40.00</span>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>	
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>	
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                                <span class=" price-in1"> $40.00</span>
                            </div>	
                            <div class="clearfix"> </div>
                        </div>		
                    </div>
    
    <!--//seller-->
    <!--tag-->
                    <div class="tag">	
                            <h3 class="cate">Tags</h3>
                        <div class="tags">
                            <ul>
                                <li><a href="#">design</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">lorem</a></li>
                                <li><a href="#">dress</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">dress</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">dress</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">lorem</a></li>
                                <li><a href="#">dress</a></li>
                            <div class="clearfix"> </div>
                            </ul>
                    </div>					
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- slide -->
<script src="js/jquery.min.js"></script>
<script src="js/imagezoom.js"></script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
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
@endsection
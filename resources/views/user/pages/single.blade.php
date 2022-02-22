@extends('user.layouts.layoutmaster')
@section('body')
<div class="container">


    <div class="col-md-9">
        <div class="col-md-5 grid">		
            <div class="flexslider">
                        <img src="{{ $sanpham->HINHANH }}" data-imagezoom="true" class="img-responsive" alt=""/>
            </div>
        </div>	
    <div class="col-md-7 single-top-in">
                            <div class="single-para simpleCart_shelfItem">
                                <h3>{{ $sanpham->TENSP }}</h3>
                                <h1>Description</h1>
                                <p>{{ $sanpham->MOTA }}</p>
                                    <label  class="add-to item_price">{{ $item->GIA }}</label>
                                    <a href="#" class="cart item_add">Add Cart</a>
                            </div>
                        </div>
    </div>
    <!----->
    <div class="col-md-3 product-bottom">
                <!--categories-->
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
    <!--//seller-->
    <!--tag-->
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
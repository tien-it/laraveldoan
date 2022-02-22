@extends('user.layouts.layoutmaster')
@section('body')
<div class="container">
	<div class="check-out">
		<h1>Checkout</h1>
    	    <table >
		  <tr>
			<th>Item</th>
			<th>Qty</th>		
			<th>Prices</th>
			<th>Delery Detials</th>
			<th>Subtotal</th>
			<th></th>
		  </tr>
		  @foreach ($giohang as $giohang_item)
			  
		  
		  <tr>
			<td class="ring-in"><a href="single.html" class="at-in"><img src="~images/{{URL::to($giohang_item->MACHITIETSANPHAM)}}.jpg" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>{{$giohang_item->TENSP}}</h5>
				<p>{{$giohang_item->created_at}}</p>
			
			</div>
			<div class="clearfix"> </div></td>
			<td class="check"><input type="text" value="{{$giohang_item	->SOLUONG}}" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>		
			<td>${{$giohang_item->GIA}}</td>
			<td>FREE SHIPPING</td>
			<td>${{$giohang_item->GIA * $giohang_item->SOLUONG}}</td>
			<td> <a href="{{route('remove',$giohang_item->id)}}" class=" to-buy">Delete</a></td>
		  </tr>
		  @endforeach
	</table>
	<a href="{{route('pay-cart')}}" class=" to-buy">PROCEED TO BUY</a>
	<a href="{{route('clear-cart')}}" class=" to-buy">CLEAR-ALL</a>
	<div class="clearfix"> </div>
    </div>
</div>
@endsection
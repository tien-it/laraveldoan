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
				<p>{{$giohang_item->MOTA}}</p>
			
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
	<a href="{{route('clear-cart')}}" class=" to-buy">CLEAR-ALL</a>
	<div class="clearfix"> </div>
	<div class="row container ">
		<h1>PAY</h1>
		<hr />
		<div class="col-md-5">
			<form action="{{ route('pay-cart') }}" method="POST">
				@csrf
				<div class="form-group">
					<input class="form-control" type="text" id ="SDT" name="SDT"  placeholder="Số điện thoại" >
				</div>
				<div class="form-group">
					<input class="form-control" type="text" id = "DIACHI" name="DIACHI"  placeholder="Địa chỉ">
				</div> 
				<div class="form-group">
					<input class="form-control" type="text" id = "GHICHU" name="GHICHU"  placeholder="Ghi chứ">
				</div> 
				<div class="form-group">
					<input class="form-control" type="hidden" id = "GHICHU" name="TONGTIEN" value="{{ $giohang->Sum('GIA') }}"  placeholder="Tổng Tiền">
				</div> 
					<button class="btn btn-primary">PAYMENT</button>
				
			</form>
		</div>
    </div>
</div>
@endsection